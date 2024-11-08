<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function setTheme(Request $request)
    {
        $request->validate(['theme' => 'required']);
        Session::put('theme', $request->input('theme'));
        return redirect()->route( 'home');
    }
}
