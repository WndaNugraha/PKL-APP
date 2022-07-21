<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class jurusancontroller extends Controller
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
        $a = jurusan::all();
        return view('jurusan.index',['jurusan'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurusan.create');
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
            'kode' => 'required|:post|max:11',
            'mapel' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
        ]);

        $post = new jurusan();
        $post -> kode = $request->kode;
        $post ->mapel = $request->mapel;
        $post ->semester = $request->semester;
        $post ->jurusan = $request->jurusan;
        $post->save();
        return redirect()->route('jurusan.index')->with('succes','Data Berhasil Dibuat!');
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
        $post = jurusan::findOrFail($id);
        return view('jurusan.show',compact('post'));
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
        $post = jurusan::findOrFail($id);
        return view('jurusan.edit',compact('post'));
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
           //
           $validated = $request->validate([
            'kode' => 'required|:post|max:11',
            'mapel' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
        ]);

        $post = jurusan::findOrFail($id);
        $post -> kode = $request->kode;
        $post ->mapel = $request->mapel;
        $post ->semester = $request->semester;
        $post ->jurusan = $request->jurusan;
        $post->save();
        return redirect()->route('jurusan.index')->with('succes','Data Berhasil Dibuat!');
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
        $post = jurusan::findOrFail($id);
        $post->delete();
        return redirect()->route('jurusan.index')->with('succes','Data Berhasil Di Hapus!');
    }
}
