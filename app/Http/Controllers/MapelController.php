<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
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
    public function dashboard()
    {
        $mapel = Mapel::all();
        return view ('courses.dashboard', compact('mapel'));
    }
    public function index()
    {
        $mapel = Mapel::all();
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create');
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
            'nama_mapel' => 'required'
        ]);

        $mapel = new Mapel([
            'nama_mapel' => $request->get('nama_mapel')
        ]);
        $mapel->save();

        return redirect('/mapel')->with('success', 'New Subject Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$mapel = mapel::find($id);
        //return view ('mapel.show')->with ('mapel',$mapel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view ('mapel.edit')->with('mapel',$mapel);
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
            'nama_mapel' => 'required'
        ]);
        $mapel = Mapel::find($id);
        $mapel->nama_mapel = $request->get('nama_mapel');
        $mapel->save();

        return redirect('/mapel')->with('success', 'New Subject Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect('/mapel')->with('success', 'Subject Removed');
    }
}
