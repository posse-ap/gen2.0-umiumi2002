<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WebappController extends Controller
{
    public function index(){
        $items =DB::table('webapps')->get();

        return view('webapp',compact('items'));
        // ブレードの名前
    }
}
