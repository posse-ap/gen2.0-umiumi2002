<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Webapp;
use App\Language;

class TestController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $user = Auth::user();
        $this->webapps = new Webapp();   
        // オブジェクト   
        $today_hours = $this->webapps->getTodayHour();
        // dd($today_hours);
        $month_hours = $this->webapps->getMonthHour();
        $total_hours = $this->webapps->getTotalHour();
        $study_hours =$this->webapps->getStudyHour();
        $study_result[]=['dates','hours'];
        for($i=1;$i<=31;$i++){
            $study_result[]=[$i,0];  
        }
        foreach($study_hours as $key => $value) {
            $study_result[(int)$value->study_date][1]=(int)$value->study_hour;
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

        return view('/webapp',compact('today_hours','month_hours','total_hours','user','study_result','language_hours','language_result','content_hours','content_result'));
        // ブレードの名前
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $webapp = new Webapp;
        // $language_ids = Language::where('language_name',$request->language)->get('id');
        // dd($request->get('content'));
        // $get_content_id = Content::where('content_name',$request->get('content'));
        // dd($get_content_id);
        // $webapp -> language_webapp ->id = $request -> language_name ->with('languages')->language_name;
        // $webapp -> language_id = $request -> language;
        // $webapp -> study_time = $request -> study_time;
        // Webapp::create([
        //     $inputs,
        //     'user_id' => Auth::id()]);
        Webapp::create([
            'user_id' => Auth::id(),
            'study_date' => $request->study_date,
            'study_time' => $request->study_time,
        ]);
        // Webapp::with('languages')->sync($request->webapp_id, ['language_id' => $request->get('langage')]);
        
       $contents_name = $request->get('content[]');
    //    dd($contents_name);
    //    $comment = $request->input('comment');

        return redirect('/webapp');
       
        // dd($request->study_time);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
