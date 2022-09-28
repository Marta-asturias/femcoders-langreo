<?php

namespace App\Http\Controllers;

use App\Models\Resource;


class UserResourcesController extends Controller
{
    public function getResources()
    {
        $resources = Resource::all()->sortByDesc("id");
        return view('resources')->with('resource',$resources);
    }
}
