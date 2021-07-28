<?php

namespace App\Http\Controllers;

use App\Chatroom;
use App\Events\MessageSent;
use App\Message;
use App\Notifications\MessageReceived;
use Illuminate\Http\Request;

class ChatroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $chatId = request()->input('chat');

        if ($user->chatrooms()->count() > 0) {
            $chatrooms = $user->chatrooms()->with('members')->with('messages')
            ->orderBy(\DB::raw('CASE WHEN id="'.$chatId.'" THEN 1 ELSE 2 END'), 'asc')
            ->orderBy('updated_at', 'desc')
            ->get();
            
            $firstPartner = $chatrooms->first()->members->where('id', '!=', $user->id)->first();
        } else {
            $chatrooms = null;
            $firstPartner = null;
        }

        $baseurl = url('/');

        return view('chatroom.index', compact('user', 'chatrooms', 'firstPartner', 'baseurl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Chatroom::find($request->chatroom_id)->touch();

        $message = Message::create([
            "chatroom_id" => $request->chatroom_id,
            "user_id" => $request->user_id,
            "content" => $request->content,
            "created_at" => $request->created_at,
            "updated_at" => $request->updated_at,
        ]);

        broadcast(new MessageSent($request->content, $request->chatroom_id))->toOthers();

        $members = Chatroom::find($request->chatroom_id)->members;
        foreach ($members as $member) {
            $authenticated = auth()->user()->id;
            if ($member->id != $authenticated) {
                $receiver = $member;
            }
        }

        $receiver->notify(new MessageReceived($message));

        return 200;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chatroom  $chatroom
     * @return \Illuminate\Http\Response
     */
    public function show(Chatroom $chatroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chatroom  $chatroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Chatroom $chatroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chatroom  $chatroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chatroom $chatroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chatroom  $chatroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chatroom $chatroom)
    {
        //
    }

    public function markChatRead( $chatroomId )
    {
        Message::where('chatroom_id', $chatroomId)
          ->update([
            'read' => 1
          ]);
        return response()->json(['success' => true]);
    }
}