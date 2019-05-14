<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\Kuis;


class CourseController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth:siswa','auth:guru','auth']);
    // }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($id)
  {
    $materi = Materi::where('mapels_id', $id)->paginate(10);
    return view('courses.index', ['course' => $materi]);
  }
  public function kuis($id)
  {
    $pertanyaan = Pertanyaan::where('jawabans_id',$id)->paginate(10);
    return view ('courses.kuis',['course' => $pertanyaan]);
  }
}
