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
		$comics = Comic::all();
		return view('guest.home', compact('comics'));
	}

    public function show(Comic $comic)
    {
      return view('guest.comics.show', compact('comic'));
    }
}
