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
use Freshbitsweb\Laratables\Laratables;
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {    
        return view('showdata');
        //return redirect()->route('show-data');
    })->name('main');
    Route::get('show-data', function () {    
        return redirect()->route('main');
        //return redirect()->route('show-data');
    });
    
    Route::get('data', function(){    
        return Laratables::recordsOf(App\ReportsData::class);
        //$reportData = App\ReportsData::paginate(50);
        //return view('showdata')->with(compact('reportData'));
    })->name('data');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
