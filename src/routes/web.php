<?php

use App\Http\Controllers\MailSendController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/webapp', 'WebappController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/mail', 'MailSendController@index');

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth'])->group(function () {
    //一般ユーザー
    // Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
        Route::resource('webapp', 'TestController');
      // });

      // 管理者以上
      // Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
        Route::get('/admin', 'AdminController@index')->name('admin');
      // });
// });


