<?php

namespace App\Http\Controllers;

use App\Models\murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $murids = murid::orderBy('nisn')->paginate(5);

        //render view with posts
        return view('tables', compact('murids'));        
        
    }

    public function regist()
    {
        return view('registermurid');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function create(Request $request)
    {
        $data = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        murid::create([
            'nisn'=> $data['nisn'],
            'nama' => $data['nama'],
            'alamat' => $data['alamat'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir']
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
        $deletedata = murid::findOrFail($id);
        $deletedata->delete();

        return redirect()->route('murid.index')->with('success', 'Data deleted successfully');
    }
}
