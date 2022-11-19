<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Webapp;

class WebappController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }


    public function index(){
        $user = Auth::user();
        $this->webapps = new Webapp();   
        $today_hours = $this->webapps->getTodayHour();
        $month_hours = $this->webapps->getMonthHour();
        $total_hours = $this->webapps->getTotalHour();
        $study_hours =$this->webapps->getStudyHour();
        // dd($study_hours);

        //棒グラフ
        $bargraph_data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($study_hours as $study_hour) {
            $each_date = $study_hour->date;
            // dd($each_date);
            array_splice($bargraph_data, $each_date - 1, 1, $study_hour->study_hour);
            // $配列, $開始位置, $削除する要素の数 , $置き換える要素を含んだ配列
        }

        $result[]=['dates','hours'];
        $bargraph_data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach($study_hours as $key => $value) {
            $result[++$key] = [$value->date, (int)$value->study_hour];
            // array_splice($bargraph_data, $value->date - 1, 1, $value->study_hour);

        }



        return view('webapp',compact('today_hours','month_hours','total_hours','user','result'));
        // ブレードの名前
    }


}
