<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Webapp extends Model
{
    protected $fillable = ['study_date','study_time'];
    public $timestamps = false;
    

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }

    public function contents()
    {
        return $this->belongsToMany('App\Content');
    }

    public function getTodayHour()
    {
        // 今月の初めの時間を取得
       $today=Carbon::today();

        return DB::table('webapps')
            ->selectRaw('DATE_FORMAT(study_date,"%Y%m%d") AS date')
            ->selectRaw('SUM(study_time) AS today_hour')
            ->groupBy('date')
            ->whereDate('study_date', $today)
            ->get();
    }
    public function getMonthHour()
    {
        // 今月の初めの時間を取得
        $now = Carbon::now()->startOfMonth();
        // 日付けあふれなしで翌月から1秒引いた時間を取得
        $next = Carbon::now()->startOfMonth()->addMonthNoOverflow()->subSecond(1);
        // 取得
        $data = $this->whereBetween('study_date', array($now, $next))->get();

        return DB::table('webapps')
            ->selectRaw('DATE_FORMAT(study_date,"%Y%m") AS date')
            ->selectRaw('SUM(study_time) AS month_hour')
            ->groupBy('date')
            ->whereBetween('study_date', array($now, $next))
            ->get();
    }

    public function getTotalHour()
    {
        return DB::table('webapps')
            ->selectRaw('SUM(study_time) AS total_hour')
            ->get();
    }
    
    public function getStudyHour()
    {
        // 今月の初めの時間を取得
        $now = Carbon::now()->startOfMonth();
        // 日付けあふれなしで翌月から1秒引いた時間を取得
        $next = Carbon::now()->startOfMonth()->addMonthNoOverflow()->subSecond(1);
        return DB::table('webapps')
        ->whereBetween('study_date', array($now, $next))
        ->selectRaw('DATE_FORMAT(study_date,"%d") AS date')
        ->selectRaw('SUM(study_time) AS study_hour')
        ->groupBy('date')
        ->get();
    }


    public function getLanguageHour() 
    {
        //全月分←今月に絞り込むカラムない
        return DB::table('language_webapp')
        ->join('languages', function($join) {
            $join->on('language_webapp.language_id', 'languages.id');
          })
        ->selectRaw('language_name AS language_name')
        ->selectRaw('SUM(divided_time) AS study_hour')
        ->groupBy('language_id')
        ->get();
    }

    public function getContentHour() 
    {
        return DB::table('content_webapp')
        ->join('contents', function($join) {
            $join->on('content_webapp.content_id', 'contents.id');
          })
        ->selectRaw('content_name AS content_name')
        ->selectRaw('SUM(divided_time) AS study_hour')
        ->groupBy('content_id')
        ->get();
    }

}
