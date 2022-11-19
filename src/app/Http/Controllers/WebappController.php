<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Webapp;
use App\Language;

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
        // dd($study_hours);
        
        //棒グラフ
        // $bargraph_data = [[0, 0],, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        // foreach ($study_hours as $study_hour) {
            //     $each_date = $study_hour->date;
            //     // dd($each_date);
            //     array_splice($bargraph_data, $each_date - 1, 1, $study_hour->study_hour);
            //     // $配列, $開始位置, $削除する要素の数 , $置き換える要素を含んだ配列
            // }
            
        $study_hours =$this->webapps->getStudyHour();
        $study_result[]=['dates','hours'];
        // $aaa[]=['dates','hours'];
        for($i=1;$i<=31;$i++){
            $study_result[]=[$i,0];  
        }
        foreach($study_hours as $key => $value) {
            // $study_result[++$key] = [$value->date, (int)$value->study_hour];
            $study_result[$value->date][1]=(int)$value->study_hour;
        }
      

        //円グラフ
        $language_hours =$this->webapps->getLanguageHour();
        $language_result[]=['language_name','hours'];
        foreach($language_hours as $key => $value){
            $language_result[++$key] = [$value->language_name, (int)$value->study_hour];
        }

         //円グラフ
         $content_hours =$this->webapps->getContentHour();
         $content_result[]=['content_name','hours'];
         foreach($content_hours as $key => $value){
             $content_result[++$key] = [$value->content_name, (int)$value->study_hour];
         }

        return view('webapp',compact('today_hours','month_hours','total_hours','user','study_result','language_hours','language_result','content_hours','content_result'));
        // ブレードの名前
    }


}
