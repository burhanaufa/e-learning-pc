<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

class MateriController extends Controller
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
        $materi = Materi::paginate(10);
        return view('materi.index', ['materi' => $materi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create');
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
            'nama_materi' => 'required',
            'konten_materi' => 'required'
        ]);

        $materi = new Materi;
        $materi->nama_materi = $request->input('nama_materi');
        $materi->konten_materi = $request->input('konten_materi');
        $materi->mapels_id = $request->input('mapels_id');
        $materi->save();

        return redirect('/materi')->with('success', 'New Lecture Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materi = Materi::find($id);
        return view ('materi.show')->with ('materi',$materi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi = Materi::find($id);
        return view ('materi.edit')->with('materi',$materi);
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
            'nama_materi' => 'required',
            'konten_materi' => 'required'
        ]);

        $materi = Materi::find($id);
        $materi->nama_materi = $request->get('nama_materi');
        $materi->konten_materi = $request->get('konten_materi');
        $materi->mapels_id = $request->get('mapels_id');
        $materi->save();

        return redirect('/materi')->with('success', 'New Lecture Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi= materi::find($id);
        $materi->delete();
        return redirect('/materi')->with('success', 'Lecture Removed');
    }
}
