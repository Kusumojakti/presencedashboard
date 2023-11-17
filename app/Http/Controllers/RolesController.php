<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = role::orderBy('id')->get();
        return response()->json([
            'status'=>true,
            'massage'=>'Succesfully get Data',
            'data'=>$data
        ],200); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataUser = new role();
        $dataUser->name_roles = $request->name_roles;

        $post = $dataUser->save();

        return response()->json([
            'status'=>true,
            'message'=>'Insert Data Success'
        ]);
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
