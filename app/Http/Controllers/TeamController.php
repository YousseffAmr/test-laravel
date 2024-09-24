<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function getTeam($id)
{
    $team = Team::find($id);
    return view('team' , compact('team'));
}

public function createTeam()
{
    return view('create');
}

public function storeTeam(Request $request)
{
    Team::create($request->all());
    return view('create');
}



public function great() {

    return 'hello great boy';
}
}
