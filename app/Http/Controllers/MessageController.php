<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')->get();
        return view('docs.documentation', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required',]);
        Message::create([
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('docs.documentation');
    }
}
