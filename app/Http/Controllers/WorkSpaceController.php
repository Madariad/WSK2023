<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;

class WorkSpaceController extends Controller
{
    public function index(Request $request)
    {
        $workSpaceList = Workspace::where('user_id', $request->user()->id)->get();
        return view('Workspaces.index', ['data' => $workSpaceList]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
        ]);
      

        $workspaces = new Workspace();
        $workspaces->title = $request->title;
        $workspaces->description = $request->description;
        $workspaces->user_id = $request->user()->id;
        $workspaces->save();

     

        return view('Workspaces.details', ["data" => $workspaces]);
    }
    public function create(Request $request)
    {
           return view('Workspaces.creat');
    }

    // public function  details(Request $request)
    // {
    //        return view('Workspaces.details');
    // }

   
}
