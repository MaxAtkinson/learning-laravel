<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Card;

class CardsController extends Controller
{
    public function index() {
        $cards = Card::all();
        return view('cards.index')->withCards($cards);
    }

    public function show(Card $card) {
        return view('cards.show')->withCard($card);
    }
}
