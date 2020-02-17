<?php

namespace App\Http\Controllers;

use App\SensorSetting;
use Illuminate\Http\Request;

class SensorSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return SensorSetting::when($request->keyword, function ($q) use ($request) {
            return $q->where('description', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('parameter', 'LIKE', '%' . $request->keyword . '%');
        })->orderBy('description')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return SensorSetting::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SensorSetting $sensorSetting)
    {
        $sensorSetting->update($request->all());
        return $sensorSetting;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorSetting $sensorSetting)
    {
        $sensorSetting->delete();
        return $sensorSetting;
    }
}
