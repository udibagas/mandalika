<?php

namespace App\Http\Controllers;

use App\SensorLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $input = $request->all();
        $data = [];

        foreach ($input as $parameter => $nilai)
        {
            $data[] = [
                'ketinggian' => SensorLog::getKetinggian($parameter),
                'parameter' => $parameter,
                'nilai' => $nilai
            ];
        }

        try {
            DB::table('sensor_logs')->insert($data);
            return 'OK';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
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

    public function getLastData(Request $request)
    {
        return SensorLog::where('ketinggian', $request->ketinggian)
            ->where('parameter', $request->parameter)
            ->latest()
            ->first();
    }
}
