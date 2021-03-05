<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comics.create');
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
        $cover = Storage::disk('public')->put('comic_imgs', $request->cover);
        $newComic = new Comic;
        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->slug = Str::slug($newComic->title);
        $newComic->cover = $cover;
        $newComic->availability = $request->availability;
        $newComic->art_by = $request->art_by;
        $newComic->written_by = $request->written_by;
        $newComic->series = $request->series;
        $newComic->price = $request->price;
        $newComic->release_date = $request->release_date;
        $newComic->volume = $request->volume;
        $newComic->trim_size = $request->trim_size;
        $newComic->page_content = $request->page_content;
        $newComic->rating = $request->rating;
        $newComic->save();
        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $data = $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'cover' => 'mimes:jpg,png,jpeg | nullable |  max:1000',
            'availability' => 'nullable',
            'price' => 'nullable',
            'trim_size' => 'nullable',
            'page_content' => 'nullable',
            'rating' => 'nullable'
        ]);
        if ($request->cover) {
            Storage::delete($comic->cover);
            $cover = Storage::disk('public')->put('comic_imgs', $request->cover);
            $data['cover'] = $cover;
        }
        $comic->update($data);
        return redirect()->route('admin.comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
