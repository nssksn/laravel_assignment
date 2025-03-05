<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tweet;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTweetRequest;


class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tweets = Tweet::with('user')->get();

        $tweets = $tweets->reverse();


        // 現在認証しているユーザーを取得
        $user = Auth::user();

        // 現在認証しているユーザーのIDを取得
        $id = Auth::id();


        return view('tweets.index', ['tweets' => $tweets, 'user' => $user, 'id' => $id]);

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
    public function store(StoreTweetRequest $request)
    {
        //ツイートした内容をDBに登録

        Tweet::create([
            'user_id' => Auth::id(),
            'tweet' => $request->tweet,
        ]);

        return to_route('tweets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //一つのツイートの情報を得る
        $tweet = Tweet::find($id);
        $tweet_user = Tweet::find($id)->user;

        //そのツイート対する全てのリプライを得る
        $replies = Reply::where('tweet_id', $id)->with('user')->get();

        $replies = $replies->reverse();

        return view('tweets.show', compact('tweet', 'tweet_user', 'replies'));
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
