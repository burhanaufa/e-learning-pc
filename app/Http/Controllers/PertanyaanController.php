<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::paginate(10);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'isi_pertanyaan' => 'required',
            'materis_id' => 'required'
        ]);

        $pertanyaan = new Pertanyaan;
        $pertanyaan->isi_pertanyaan = $request->input('isi_pertanyaan');
        $pertanyaan->materis_id = $request->input('materis_id');
        $pertanyaan->save();

        return redirect('/pertanyaan')->with('success', 'New Question Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view ('pertanyaan.show')->with ('pertanyaan',$pertanyaan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view ('pertanyaan.edit')->with('pertanyaan',$pertanyaan);
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
        $this->validate($request,[
            'isi_pertanyaan' => 'required',
            'materis_id' => 'materis_id'
        ]);
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan ->isi_pertanyaan = $request->input('isi_pertanyaan');
        $pertanyaan ->materis_id = $request->input('materis_id');
        $pertanyaan->save();

        return redirect('/pertanyaan')->with('success', 'New Question Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect('/pertanyaan')->with('success', 'Question Removed');
    }
}
