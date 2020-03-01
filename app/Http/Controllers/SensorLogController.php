<?php

namespace App\Http\Controllers;

use App\SensorLog;
use App\SensorSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return SensorLog::when($request->dateRange, function ($q) use ($request) {
            return $q->whereRaw('DATE(created_at) BETWEEN ? AND ?', $request->dateRange);
        })
            ->orderBy($request->sort ?: 'created_at', $request->order == 'ascending' ? 'asc' : 'desc')
            ->paginate($request->pageSize);
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

        foreach ($input as $parameter => $nilai) {
            if ($parameter == 'api_token') continue;

            $setting = SensorSetting::where('parameter', $parameter)->first();

            if (!$setting) {
                return response(['message' => 'Parameter ' . $parameter . ' belum didefinisikan'], 422);
            }

            $data[] = [
                'ketinggian' => $setting->height,
                'parameter' => $parameter,
                'nilai' => $nilai,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        try {
            DB::table('sensor_logs')->insert($data);
            return [
                'success' => true,
                'message' => 'OK',
            ];
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 500);
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

    public function exportToExcel(Request $request)
    {
        return SensorLog::when($request->dateRange, function ($q) use ($request) {
            return $q->whereRaw('DATE(created_at) BETWEEN ? AND ?', $request->dateRange);
        })->orderBy($request->sort ?: 'created_at', $request->order == 'ascending' ? 'asc' : 'desc')->get();
    }
}
