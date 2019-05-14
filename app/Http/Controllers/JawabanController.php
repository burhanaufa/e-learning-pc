<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;

class JawabanController extends Controller
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
        $jawaban = Jawaban::paginate(10);
        return view('jawaban.index', compact('jawaban'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jawaban.create');
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
            'isi_jawaban' => 'required',
            'pertanyaans_id' => 'required'
        ]);

        $jawaban = new Jawaban;
        $jawaban->isi_jawaban = $request->get('isi_jawaban');
        $jawaban->pertanyaans_id = $request->get('pertanyaans_id');
        $jawaban->save();

        return redirect('/jawaban')->with('success', 'New Answers Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jawaban = Jawaban::find($id);
        return view ('jawaban.show')->with ('jawaban',$jawaban);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawaban = Jawaban::find($id);
        return view ('jawaban.edit')->with('jawaban',$jawaban);
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
            'isi_jawaban' => 'required',
            'pertanyaans_id' => 'required'
        ]);
        $jawaban = Jawaban::find($id);
        $jawaban->isi_jawaban = $request->get('isi_jawaban');
        $jawaban->pertanyaans_id = $request->get('pertanyaans_id');
        $jawaban->save();

        return redirect('/jawaban')->with('success', 'New Answers Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jawaban = Jawaban::find($id);
        $jawaban->delete();
        return redirect('/jawaban')->with('success', 'Answers Removed');
    }
}
