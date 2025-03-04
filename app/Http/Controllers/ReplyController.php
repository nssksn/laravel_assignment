<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReplyRequest;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplyRequest $request)
    {
        //リツイート内容をDBに登録

        Reply::create([
            'tweet_id' => $request->tweet_id,
            'user_id' => Auth::id(),
            'reply' => $request->reply,
        ]);

        //一つのツイートを取得する
        $tweet = $request->tweet_id;

        return to_route('tweets.show', ['tweet' => $tweet]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
