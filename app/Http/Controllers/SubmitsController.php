<?php

namespace App\Http\Controllers;

use App\Submit;
use Illuminate\Http\Request;

class SubmitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('submits.index', compact('products'));
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
        // $request->validate([
        //     'filecsv' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);
  
        // $fileName = time().'.'.$request->filecsv->extension();  
   
        // $request->filecsv->move(public_path('uploads'), $fileName);
   
        // return redirect('/Submits')
        // // return back()
        //     ->with('success','You have successfully upload file.')
        //     ->with('file',$fileName);


        $formInput=$request->except('filecsv');

        $this->validate($request,[
            'filecsv' => 'required'
        ]);

        $csv=$request->filecsv;
        if($csv){
            $fileName=$csv->getClientOriginalName();
            $csv->move('csv/', $fileName);
            $formInput['filename']=$fileName;
        }

        Submit::create($formInput);

        return redirect('/Submits')->with('status',
        'Terima kasih sudah menginput data, data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function show(Submit $submit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function edit(Submit $submit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submit $submit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submit $submit)
    {
        //
    }
}
