<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$theme = session('theme', 'classic');
		return view('.home', compact('theme'));
	}
}