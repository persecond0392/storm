<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use App\Models\Comment;
use Illuminate\Support\Str;
use App\Models\Room;
  

class RoomController extends Controller
{
    public function store (Request $request , Room $room) {
        $title=$request->input('title');
        $userId=auth()->user()->id;
        $key=Str::random(7);
        
        $room->fill([
            'name'=>$title,
            'key'=>$key,
            'user_id'=>$userId
            ])->save();
        return view('rooms.posts')->with(['key'=>$room->key ,'title'=>$title ]);
        }
        
    public function enter (RoomRequest $request , Room $room) {
        $pass=$request->input('key');
        return redirect('/'.$pass);
        }    
        
    public function host (Request $request ,$key,Comment $comment,Room $room ) {
         $comments=$comment->where('room_key' ,$key)->get();
         return view('rooms.chat')->with(['key'=>$key, 'comments'=>$comments ]);
        }    

    public function index()
    {
        $comments = Comment::get();
        return view('romms.chat', ['comments' => $comments]);
    }
    
    public function comment(Request $request,$key)
    {
        $user = auth()->user();
        $comment = $request->input('comment');
        Comment::create([
            'user_id' => $user->id,
            'comment' => $comment,
            'room_key' =>$key
        ]);
        return redirect('/'.$key);
    }
}
