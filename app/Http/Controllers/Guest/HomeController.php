<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
		//
	public function home()
	{
		$jumbotron = Comic::take(5)->get();
		$comics = Comic::all();
		return view('guest.home', compact('comics', 'jumbotron'));
	}

	public function show(Comic $comic)
	{
		return view('guest.comics.show', compact('comic'));
	}
}
