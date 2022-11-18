<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Webapp extends Model
{
    public function languages()
    {
        return $this->hasMany('App\Language');
    }

    public function contents()
    {
        return $this->hasMany('App\Content');
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
}
