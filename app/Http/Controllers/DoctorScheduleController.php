<?php

namespace App\Http\Controllers;

use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class DoctorScheduleController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexDoctorSchedules($doctorId)
    {
        try {

            $schedules = DoctorSchedule::where('doctor_id', $doctorId)->get();
            return response()->json($schedules);
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()],
                $e->getCode());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $doctorId)
    {
        try {

            $doctor = User::find($doctorId);

            if ($doctor->role != "doctor") {
                return response()->json([
                    'error' => 'El usurio no es un doctor'
                ], 400);
            }

            $schedules = DoctorSchedule::create([
                'doctor_id' => $doctorId,
                'day_of_week' => $request->day_of_week,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time
            ]);

            return response()->json($schedules, 201);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()],
                $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
