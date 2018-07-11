<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecksController extends Controller
{
    public function index()
    {
        $decks = Deck::where('user_id', Auth::user()->id)->get();
        return view('decks.index', compact('decks'));
    }

    public function show(Deck $deck)
    {
        return view('decks.show', compact('deck'));
    }
}
