<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TonchikTm\PdfToHtml\Pdf;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function convertToPDF(){
        $pdf = new Pdf('C:/xampp/htdocs/e-learning/pdf/Sistem-Reproduksi.pdf', [
            'pdftohtml_path' => 'C:/xampp/htdocs/e-learning/poppler-0.68.0/bin/pdftohtml.exe',
            'pdfinfo_path' => 'C:/xampp/htdocs/e-learning/poppler-0.68.0/bin/pdfinfo.exe'
        ]);

        // get pdf info
        $pdfInfo = $pdf->getInfo();

        // get count pages
        $countPages = $pdf->countPages();

        // get content from one page
        $contentFirstPage = $pdf->getHtml()->getPage(1);

        // get content from all pages and loop for they
        foreach ($pdf->getHtml()->getAllPages() as $page) {
            echo $page . '<br/>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
