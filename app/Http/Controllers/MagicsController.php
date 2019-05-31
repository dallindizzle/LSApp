<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagicsController extends Controller
{
    public function index() {
        $card = json_decode(file_get_contents('https://api.scryfall.com/cards/named?fuzzy=cyclonic+rift'));
        return view('magic.index')->with('cardImage', $card->image_uris->normal);
    }
}
