<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
      // Show the form for creating a new article
      public function create()
      {
          return view('articles.create');
      }
  
      // Store a newly created article in the database
      public function store(Request $request)
      {
          $request->validate([
              'title' => 'required|string|max:255',
              'content' => 'required|string',
          ]);
  
          $article = new Article();
          $article->title = $request->title;
          $article->content = $request->content;
          $article->save();
  
          return redirect()->route('articles.create')->with('success', 'Article created successfully!');
      }
}
