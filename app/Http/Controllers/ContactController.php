<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $theme = session('theme', 'classic');
        return view('themes.' . $theme . '.contacts', compact('theme'));
    }
}
