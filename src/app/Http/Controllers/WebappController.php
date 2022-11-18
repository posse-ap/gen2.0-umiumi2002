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
        $this->webapps = new Webapp();
        $today_hours = $this->webapps->getTodayHour();
        // dd($today_hours);
        $month_hours = $this->webapps->getMonthHour();
        $total_hours = $this->webapps->getTotalHour();
        // dd($total_hours);
        $user = Auth::user();
        return view('webapp',compact('today_hours','month_hours','total_hours','user'));
        // ブレードの名前
    }


}
