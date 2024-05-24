<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        // Fetch sensor data from database or API
        $sensorData = []; // Example data structure

        // Return view with sensor data
        return view('sensor', ['sensorData' => $sensorData]);
    }
}