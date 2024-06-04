<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MqSensor;

class MqSensorController extends Controller
{
    function index()
    {
        $sensorData = MqSensor::orderBy('created_at', 'desc')

            ->limit(20)
            ->get();

        return response()->json($sensorData, 200);
    }

    function show($id)
    {
        $sensorData = MqSensor::find($id);

        if ($sensorData) {
            return response()
                ->json($sensorData, 200);
        } else {
            return response()
                ->json(['message' => 'Data not found'], 404);
        }
    }
    function store(Request $request)
    {
        $request->validate([
            'value' => [
                'required',
                'numeric',
            ]
        ]);
        $sensorData = MqSensor::create($request->all());

        return response()
            ->json($sensorData, 201);
    }
}
