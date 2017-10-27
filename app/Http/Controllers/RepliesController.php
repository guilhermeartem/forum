<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Thread $thread)
    {
        $thread->addReply([
            'body' => $request->input('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
