<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $a = siswa::all();
        return view('siswa.index',['siswa'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('siswa.create');
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
        $validated = $request->validate([
            'nis' => 'required|:post|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
        ]);

        $post = new siswa();
        $post -> nis = $request->nis;
        $post ->nama = $request->nama;
        $post ->alamat = $request->alamat;
        $post ->tanggal = $request->tanggal;
        $post->save();
        return redirect()->route('siswa.index')->with('succes','Data Berhasil Dibuat!');
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
        $post = siswa::findOrFail($id);
        return view('siswa.show',compact('post'));
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
        $post = siswa::findOrFail($id);
        return view('siswa.edit',compact('post'));
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
        $validated = $request->validate([
            'nis' => 'required|:post|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
        ]);

        $post = siswa::findOrFail($id);
        $post -> nis = $request->nis;
        $post ->nama = $request->nama;
        $post ->alamat = $request->alamat;
        $post ->tanggal = $request->tanggal;
        $post->save();
        return redirect()->route('siswa.index')->with('succes','Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = siswa::findOrFail($id);
        $post->delete();
        return redirect()->route('siswa.index')->with('succes','Data Berhasil Di Hapus!');
    }
}
