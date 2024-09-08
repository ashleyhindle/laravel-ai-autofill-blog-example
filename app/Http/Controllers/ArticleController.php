<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\MeetingNote;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $article = new Article();
        $article->title = $validatedData['title'];
        $article->content = $validatedData['description'];
        $article->save();

        // The AiAutofill trait will automatically fill the other fields

        return redirect('/')->with('success', 'Article created successfully!');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        $meetingNotes = MeetingNote::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles', 'meetingNotes'));
    }
}
