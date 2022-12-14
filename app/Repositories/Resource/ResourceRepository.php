<?php

namespace App\Repositories\Resource;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ResourceRepository  {

private Resource $Resource;

    public function __construct() {
    $this->Resource= new Resource(); 
    }

    public function getAll(){
    return $this->Resource->all()->sortByDesc("id");
    }

    public function saveResource(Request $request)
    {  
        $request->validate([     
            'file' => 'required|mimes:jpg,png|max:2048',
            'link'=> 'required', 
           
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $this->Resource->title = $request->get('title');
        $this->Resource->link = $request->get('link');
        $this->Resource->image = $url_file;
        return $this->Resource->save();    
    }

    public function editResource(Request $request, $id){
        return Resource::find($id);
    }

    public function updateResource(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'link' => 'required',
        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $this->Resource = Resource::find($id);
        $this->Resource->title = $request->get('title');
        $this->Resource->link = $request->get('link');
        $this->Resource->image = $url_file;
        Alert::success('Actualizado', 'Este administrador ha sido actualizado con éxito');
        return $this->Resource->save(); 
    }

    public function destroyResource(Request $request)
    {
        $Resource = Resource::find($request->id);
        Alert::warning('Eliminado', 'El Recurso Ha sido Borrado');       
        return $Resource->delete();
    
    }

}