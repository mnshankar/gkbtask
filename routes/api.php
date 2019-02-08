<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get-data/{column}/{value}', function($column,$value) {
    //handle invalid column names gracefully
    $validColumnNames = ['data-1',
                    'data-2',
                    'data-3',
                    'data-4',
                    'data-5',
                    'data-6',
                    'data-7',
                    'data-8',
                    'data-9',
                    'data-10',
                    'data-11',
                    'data-12',
                    'data-13',
                    'data-14',
                    'data-15',
                    'data-16',
                    'data-17',
                    'data-18',
                    'data-19',
                    'data-20',
                ];     
            
    if(!in_array($column,$validColumnNames)){
        return response()->json([
            'status' => false,
            'message' => 'Invalid Resource',
        ]);
    }        
    $reportRecords = App\ReportsData::where($column,$value)->paginate(50);
    return App\Http\Resources\ReportResource::collection($reportRecords);
});