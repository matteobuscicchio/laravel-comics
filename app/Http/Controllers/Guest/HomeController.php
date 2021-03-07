<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Comic;
use App\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	//
	public function home()
	{
		$jumbotron = Comic::take(5)->get();
		$articles = Articles::take(3)->get();
		return view('guest.home', compact('jumbotron','articles'));
	}

	public function show(Comic $comic)
	{
		return view('guest.comics.show', compact('comic'));
	}
}
