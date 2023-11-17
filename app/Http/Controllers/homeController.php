<?php

namespace App\Http\Controllers;

use App\Models\murid;
use App\Models\uid;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalmurid = murid::all()->count();
        $uidactive = uid::all()->count();

        return view('index')->with([
            'totalmurid'=> $totalmurid,
            'uidactive' => $uidactive
        ]); 
    }

    // public function totaluid()
    // {
    //     $uidactive = uid::all()->count();
    //     return view('index')->with('uidactive', $uidactive);
    // }

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
