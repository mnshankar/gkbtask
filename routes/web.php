<?php

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

Route::get('/', function () {
    return redirect()->route('show-data');
});
Route::get('show-data', function(){
    $reportData = App\ReportsData::paginate(50);
    return view('showdata')->with(compact('reportData'));
})->name('show-data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
