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
        $workshops = Workshop::all()->sortByDesc("id");
        return view('admin.workshops')->with('workshop',$workshops);
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
            // 'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'details' => 'required',
            'age'  => 'required',
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
        return redirect('admin/workshops');
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
    public function edit(Request $request, $id)
    {
        $workshop = Workshop::find($id);
        if(!$workshop){
            return view('workshop.notexist');
        }

        return view('admin.edit')->with('workshop',$workshop);
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
        $request->validate([
            // 'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'details' => 'required',
            'age'  => 'required',
            'duration'  => 'required',
            'format'  => 'required'
        ]);

/*         $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName); */
        // $url_file = Storage::url($fileName);
        $workshop = Workshop::find($id);
        $workshop->title = $request->get('title');
        $workshop->details = $request->get('details');
        // $workshops->image = $url_file;
        $workshop->age = $request->get('age');
        $workshop->duration = $request->get('duration');
        $workshop->format = $request->get('format');
        $workshop->save();
        return view('/pruebas')->with('workshop',$workshop);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $workshop = workshop::find($request->id);        
        $workshop->delete();
        return redirect('/admin/workshops');
    }
}
