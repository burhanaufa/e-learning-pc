<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Siswa;


class Guru_SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru ::all();
        $siswa = Siswa ::all();
        return view('guru_siswa.index', ['siswa' => $siswa , 'guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::pluck('nama_guru', 'id');
        $siswa = Siswa::pluck('nama_siswa','id');
        return view('guru_siswa.create',['siswa' => $siswa , 'guru' => $guru]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::find($request);
        $guru = Guru::find($request);
        $siswa->guru()->sync($request->guru);
        $guru->siswa()->sync($request->siswa);
        $siswa->save();
        $guru->guru();

        return redirect('/guru_siswa')->with('success', 'New Pivots Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $guru = Guru::find($id);
        $guru = Guru::pluck('nama_guru', 'id');
        $siswa = Siswa::pluck('nama_siswa','id');
        return view('guru_siswa.create',['siswa' => $siswa , 'guru' => $guru]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        $siswa = Siswa::find($id);
        return view ('guru_siswa.edit')->with('guru_id',$guru);
        return view ('guru_siswa.edit')->with('siswa_id',$siswa);
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

        $siswa = Siswa::find($request);
        $guru = Guru::find($request);
        $siswa->guru()->sync($request->guru);
        $guru->siswa()->sync($request->siswa);
        $siswa->save();
        $guru->guru();

        return redirect('/guru_siswa')->with('success', 'New Pivots Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru= Guru::find($id);
        $siswa= Siswa::find($id);
        $guru->delete();
        $siswa->delete();
        return redirect('/guru_siswa')->with('success', 'Pivots Removed');
    }
}
