<?php

namespace App\Http\Controllers;

use App\Models\MeetingNote;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class MeetingNoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        MeetingNote::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/')->with('success', 'Meeting note created successfully.');
    }
}
