<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function show(Subject $subject)
    {
        $decks = Deck::where('user_id', Auth::user()->id)->where('subject_id', $subject->id)->get();
        return view('subjects.show')->with('subject', $subject)->with('decks', $decks);
    }
}
