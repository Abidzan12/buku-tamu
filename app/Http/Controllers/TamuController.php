<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tamus = Tamu::all();
        return view('tamu.index', compact('tamus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    {
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'pesan' => 'required|string|max:1000',
    ]);

    Tamu::create($request->all());

    return redirect()->route('tamu.index')->with('success', 'Tamu berhasil ditambahkan.');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // Find and delete the guest record
    $tamu = Tamu::findOrFail($id);
    $tamu->delete();
    
    // Redirect back with success message
    return redirect()->route('tamu.index')
        ->with('success', 'Data kunjungan tamu berhasil dihapus');
    }

    public function hapusPesan($id) 
    {
    $tamu = Tamu::findOrFail($id);
    $tamu->pesan = '-'; // ✅ atau bisa juga '', tergantung kebutuhan
    $tamu->save();

    return redirect()->route('tamu.index')->with('success', 'Pesan berhasil dihapus.');
    }

}
