<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $character = Character::ensureDefault();

        return view('pages.dream-signal', [
            'character' => $character,
            'currentSection' => $request->path() === '/' ? 'home' : $request->path(),
        ]);
    }
}
