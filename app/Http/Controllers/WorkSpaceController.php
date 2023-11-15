<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;

class WorkSpaceController extends Controller
{
    public function index(Request $request)
    {
        $workSpaceList = Workspace::where('user_id', $request->user())->get();
        return view('Workspaces.index', ['data' => $workSpaceList]);
    }

    public function store(CreateRequest $request)
    {
        $workspaces = new Workspace();
        $workspaces->title = $request->title;
        $workspaces->description = $request->description;
        $workspaces->user_id = $request->user()->id;
        $workspaces->save();

     

        return redirect('/workspace/details');
    }
}
