<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        #ユーザーがログインしていない場合は、ログイン画面へリダイレクト
        if( empty( auth()->user() ) ){
            return redirect()->route('login');
        }
 
        //ユーザーの権限チェック
        if (auth()->user()->role === '1') {
            $this->auth = true;
        } else {
            $this->auth = false;
        }
 
        //ユーザーの権限がadminだった場合は、アクセスを許可。
        if ($this->auth === true) {
            // return $next($request);
            return redirect->route('admin');
        }
 
        //それ以外はログイン画面にリダイレクト
        return redirect()->route('login')->with('error', '権限がありません');
    }
}
