<?php

namespace App\Http\Controllers\Admin;

use App\Articles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Articles::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request['slug'] = Str::slug($request->title);
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'slug' => 'required',
            'cover' => 'mimes:jpg,png,jpeg | nullable |  max:1000',
            'eyelet' => 'nullable',
        ]);
        if ($request->cover) {
            $cover = Storage::disk('public')->put('comic_imgs', $request->cover);
            $data['cover'] = $cover;
        };
        Articles::create($data);
        $article = Articles::orderby('id' , 'desc')->first();
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {
        //
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $article)
    {
        //
        
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
