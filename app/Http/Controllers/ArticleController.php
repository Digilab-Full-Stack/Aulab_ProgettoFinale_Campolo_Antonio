<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['index', 'show', 'byCategory', 'byUser', 'articleSearch' ])
        ];
    }

    public function index()
    {

        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:articles|min:5',
            'subtitle'=>'required|min:5',
            'body'=> 'required|min:10',
            'image'=> 'required|image',
            'category'=> 'required'
        ]);
    

    $article = Article::create([
        'title'=> $request->title,
        'subtitle'=> $request->subtitle,
        'body'=> $request->body,
        'image'=> $request->file('image')->store('images', 'public'),
        'category_id'=> $request->category,
        'user_id'=> Auth::user()->id

    ]);

    $tags = explode(',', $request->tags);

    foreach($tags as $i => $tag) {
        $tags[$i] = trim($tag);
    }

    foreach($tags as $tag) {
        $newTag = Tag::updateOrCreate([
            'name' => strtolower($tag)
        ]);
        $article->tags()->attach($newTag);
    }

    return redirect(route('homepage'))->with('message', 'Articolo creato con successo');
   
}
    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category) {
        $articles = $category->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.by-category', compact('category','articles'));
    }
    public function byUser(User $user) {
    
        $articles=$user->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.by-user', compact('user','articles'));
    }
    
    public function edit(Article $article)
    {
        if (Auth::user()->id == $article->user_id) {
            return view('article.edit', compact('article'));
        }
        return redirect()->route('homepage')->with('alert', 'Accesso non consentito');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title'=>'required|min:5|unique:articles,title,' . $article->id,
            'subtitle'=>'required|min:5',
            'body'=> 'required|min:10',
            'image'=> 'image',
            'category'=> 'required',
            'tags' => 'required'
        ]);
    

    $article->update([
        'title'=> $request->title,
        'subtitle'=> $request->subtitle,
        'body'=> $request->body,
        'category_id'=> $request->category

    ]);

    if($request->image){
        Storage::delete($article->image);
        $article->update([
            'image'=> $request->file('image')->store('images', 'public'),
        ]);
    }

    $tags = explode(',', $request->tags);

    foreach($tags as $i => $tag) {
        $tags[$i] = trim($tag);
    }
    $newTags=[];

    foreach($tags as $tag) {
        $newTag = Tag::updateOrCreate([
            'name' => strtolower($tag)
        ]);
        $newTags[] =$newTag->id;
    }
    $article->tags()->sync($newTags);

    return redirect(route('writer.dashboard'))->with('message', 'Articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        foreach ($article->tags as $tag) {
            $article->tags()->detach($tag);
        }
        $article->delete();
        return redirect()->back()->with('message', ' Articolo cancellato con successo');
        
    }

    public function articleSearch(Request $request) {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.search-index', compact('articles', 'query'));
    }




}
