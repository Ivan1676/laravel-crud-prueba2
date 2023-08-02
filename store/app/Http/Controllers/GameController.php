<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();

        return view('store', [
            'games' => $games
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-game');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'genre' => 'required|min:3',
            'release_date' => 'required|date',
            'developer' => 'required|min:3',
            'price' => 'required|numeric',
        ]);

        Game::create($data);

        return redirect()->route('store'); // Redirect to the "store" page after adding the game
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        $game = Game::find($game->id);

        return view('store', [
            'game' => $game
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('edit-game', [
            'game' => $game
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function editView(Game $game)
    {
        return view('edit-game', [
            'game' => $game
        ]);
    }

    public function update(Request $request, Game $game)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'genre' => 'required|min:3',
            'release_date' => 'required|date',
            'developer' => 'required|min:3',
            'price' => 'required|numeric',
        ]);

        $game->update($data);

        return redirect()->route('store');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('store');
    }

    public function deleteView(Game $game)
    {
        return view('delete-game', [
            'game' => $game
        ]);
    }

    public function delete(Game $game)
    {
        $game->delete();
        return redirect()->route('store');
    }
}