<?php

namespace App\Repositories\MiniGame;
use App\Models\MiniGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MiniGameRepository  {

private MiniGame $MiniGame;

    public function __construct() {
    $this->MiniGame= new MiniGame(); 
    }

    public function getAll(){
    return $this->MiniGame->all()->sortByDesc("id");
    }

    public function saveMiniGame(Request $request)
    {  
        $request->validate([     
            'file' => 'required|mimes:jpg,png|max:2048',
            'link'=> 'required', 
           
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $this->MiniGame->title = $request->get('title');
        $this->MiniGame->link = $request->get('link');
        $this->MiniGame->image = $url_file;
        return $this->MiniGame->save();    
    }

    public function editMiniGame(Request $request, $id){
        return MiniGame::find($id);
    }

    public function updateMiniGame(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'link' => 'required',
        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $this->MiniGame = MiniGame::find($id);
        $this->MiniGame->title = $request->get('title');
        $this->MiniGame->link = $request->get('link');
        $this->MiniGame->image = $url_file;
        return $this->MiniGame->save(); 
    }

    public function destroyMiniGame(Request $request)
    {
        $MiniGame = MiniGame::find($request->id);        
        return $MiniGame->delete();
    
    }

}