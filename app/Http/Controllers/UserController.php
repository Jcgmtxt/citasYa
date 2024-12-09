<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $users = User::all();
            return response()->json($users);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()],
                $e->getCode());

        }
    }

    public function indexDoctor()
    {
        try {

            $doctors = User::where('role', 'doctor')->get();
            return response()->json($doctors);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()],
                $e->getCode());

        }
    }

    public function indexPatient()
    {
        try {

            $patients = User::where('role', 'patient')->get();
            return response()->json($patients);

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
    public function store(Request $request)
    {
        //
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
