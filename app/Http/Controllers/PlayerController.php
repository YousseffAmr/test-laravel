<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function create()
    {

        return view("players.create");

    }

    public function list()
    {

        $players = Player::query();
        $players = $players->paginate();

        debugbar()->info($players);
        return view("test", compact('players'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5'],
            'nationality' => ['required'],
        ]);
        // Player::create($request->all());  
        Player::create([
            "name" => $request->name,
            "nationality" => $request->nationality,
        ]);
        return redirect("/players-list");

    }

}
