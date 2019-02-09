<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportDataController extends Controller
{
    protected $validColumnNames = ['data-1',
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
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($column,$value)
    {
        //handle invalid column names gracefully
        if(!in_array($column,$this->validColumnNames)){
            return response()->json([
            'status' => false,
            'message' => 'Invalid Resource',
            ]);
        }       
        $reportRecords = \App\ReportsData::where($column,$value)->get();//->paginate(50);
        //dd($reportRecords);
        return \App\Http\Resources\ReportResource::collection($reportRecords);
    }
    public function index2($column1,$value1, $column2, $value2)
    {
        //handle invalid column names gracefully
        if(!in_array($column1,$this->validColumnNames) || !in_array($column2,$this->validColumnNames)){
            return response()->json([
            'status' => false,
            'message' => 'Invalid Resource',
            ]);
        }       
        $reportRecords = \App\ReportsData::where($column1,$value1)
        ->where($column2,$value2)->get();

        return \App\Http\Resources\ReportResource::collection($reportRecords);
    }
    
}
