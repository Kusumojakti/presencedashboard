<?php

namespace App\Http\Controllers;

use App\Models\uid;
use Illuminate\Http\Request;

class UIDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showregister()
    {
        return view('registeruid');
    }

    public function index()
    {
        $uid = uid::orderBy('nisn')->paginate(5);

        //render view with posts
        return view('listuid', compact('uid'));  
    }
    
    public function uidlist()
    {
        $data = uid::orderBy('id')->get();
        return response()->json([
            'status'=>true,
            'massage'=>'Succesfully get Data',
            'data'=>$data
        ],200);     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'uid' => 'required',
            'nisn' => 'required|exists:murids,nisn',
        ]);

        uid::create([
            'uid' => $data['uid'],
            'nisn'=> $data['nisn'],
        ]);

        return redirect('/');
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
