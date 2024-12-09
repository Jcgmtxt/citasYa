<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use Illuminate\Http\Request;
use Exception;

class AppoitmentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        try {

            $doctorId = $request->doctor_id;
            $patientId = $request->patient_id;
            $appointmentDate = $request->appointment_date;
            $startTime = $request->start_time;
            $endTime = $request->end_time;

            $hasAppointment = Appoitment::where('doctor_id', $doctorId)
                ->where('appoitment:_date', $appointmentDate)
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->whereBetween('start_time', [$startTime, $endTime])
                        ->orWhereBetween('end_time', [$startTime, $endTime]);
                })
                ->first();

                if ($hasAppointment) {
                    return response()->json([
                        'error' => 'El doctor ya tiene una cita en ese horario'
                    ], 400);
                }

            $appoitment = Appoitment::create([
                'doctor_id' => $doctorId,
                'patient_id' => $patientId,
                'appoitment:_date' => $appointmentDate,
                'start_time' => $startTime,
                'end_time' => $endTime
            ]);

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
