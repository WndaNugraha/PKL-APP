<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nilai;

class nilaicontroller extends Controller
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

    public function grade($a){
        if ($a < 100 && $a >= 90){
            $b = 'A';
        }
        elseif ($a < 90 && $a >= 80) {
            $b = 'B';
        }
        elseif ($a < 80 && $a >= 70) {
            $b = 'C';
        }
        elseif ($a < 70 && $a >= 50) {
            $b = 'D';
        }
        elseif ($a < 50 && $a >= 00) {
            $b = 'B';
        }
        else {
            $b = 'Grade Tidak Ada!';
        }
        return $b ;
    }

    public function index()
    {
        //
             //
             $a = nilai::all();
             return view('nilai.index',['nilai'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nilai.create');
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
            'kode' => 'required',
            'nilai' => 'required',
        ]);

        $post = new nilai();
        $post -> nis = $request->nis;
        $post ->kode = $request->kode;
        $post ->nilai = $request->nilai;
        $post ->grade = $this->grade($post->nilai);
        $post->save();
        return redirect()->route('nilai.index')->with('succes','Data Berhasil Dibuat!');
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
        $post = nilai::findOrFail($id);
        return view('nilai.show',compact('post'));
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
        $post = nilai::findOrFail($id);
        return view('nilai.edit',compact('post'));
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
            'nis' => 'required|:post|max:225',
            'kode' => 'required',
            'nilai' => 'required',
        ]);
        $post = nilai::findOrfail($id);
        $post -> nis = $request->nis;
        $post ->kode = $request->kode;
        $post ->nilai = $request->nilai;
        $post ->grade = $this->grade($post->nilai);
        $post->save();
        return redirect()->route('nilai.index')->with('succes','Data Berhasil Diedit!');
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
        $post = nilai::findOrFail($id);
        $post->delete();
        return redirect()->route('nilai.index')->with('succes','Data Berhasil Di Hapus!');
    }
}
