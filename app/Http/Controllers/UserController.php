<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginpage()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    
    public function index()
    {
        $data = users::orderBy('id')->get();
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
            'nisn' => 'required|exists:murids,nisn',
            'email' => 'required',
            'password' => 'required|min:8|string',
        ]);

        users::create([
            'nisn'=> $data['nisn'],
            'email'=> $data['email'],
            'password' => Hash::make($data['password']),
            'id_roles' => 1
        ]);

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required|min:8|string'
        ]);
        $user = users::where('email', $data['email'])->first();
        if (Hash::check($data['password'], $user->password)) {
            session()->put('id', $user->id);
            session()->put('email', $user->email);
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['password' => 'Password Anda Salah']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = users::find($id);
        if($data){
            return response()->json([
                'status'=>true,
                'message'=>'Data Founded',
                'data'=>$data
            ],200);
        }else{
            return response()->json([
                'status'=>false,
                'message'=>'Data Not Found',                
            ],400);
        }
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

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
