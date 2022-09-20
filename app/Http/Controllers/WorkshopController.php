<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\View\Components\pruebas;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pruebas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'details' => 'required',
            'age range'  => 'required',
            'duration'  => 'required',
            'format'  => 'required'
        ]); 

/*         $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName); */
        // $url_file = Storage::url($fileName);
        $workshops = new Workshop();
        $workshops->title = $request->get('title');
        $workshops->details = $request->get('details');
        // $workshops->image = $url_file;
        $workshops->age = $request->get('age');
        $workshops->duration = $request->get('duration');
        $workshops->format = $request->get('format');
        $workshops->save();
        return redirect('/pruebas');
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
        return view('admin.edit');
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
