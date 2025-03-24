<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function dashboard() {
        $unrevisionedArticles = Article::Where('is_accepted', NULL)->get();
        $acceptedArticles = Article::Where('is_accepted', true)->get();
        $rejectedArticles = Article::Where('is_accepted', false)->get();
        return view('revisor.dashboard', compact('unrevisionedArticles', 'acceptedArticles', 'rejectedArticles'));
    }
    public function acceptArticle(Article $article) {
        $article->is_accepted = true;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', 'Articolo pubblicato' );
    }
    public function rejectedArticle(Article $article) {
        $article->is_accepted = false;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', 'Articolo rifiutato');
    }
    public function undoArticle(Article $article) {
        $article->is_accepted = NULL;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', 'Articolo rimandato in revisione' );
    }
}
