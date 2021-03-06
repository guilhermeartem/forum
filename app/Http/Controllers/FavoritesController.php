<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Reply $reply) {
        $reply->favorite(auth()->id());

        if(request()->expectsJson()){
            return response(['Favorited!']);
        }

        return back();
    }

    public function destroy(Reply $reply) {
        $reply->unfavorite(auth()->id());

        if(request()->expectsJson()){
            return response(['Unfavorited!']);
        }

        return back();
    }
}
