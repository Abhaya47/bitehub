<?php

namespace App\Http\Controllers;

use App\Livewire\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function sendMessage(Request $request){
        $validatedData = $request->validate([
            'message' => 'required',
            'user_id' => 'required',
            'receiver_id' => 'required'
        ]);
        $parameters=[
            'message' => $request->message,
            'user_id' => $request->user_id,
            'restaurant_id' => $request->receiver_id,
            'to' => $request->receiver_id,
            'from' => $request->user_id,
        ];

        $query = Message::query()->create($parameters);

        return json_encode(["message"=>"message send successfully"]);
    }

    public function receiveMessage(Request $request){
        $validatedData=request()->validate([
            'user_id'=>'required',
            'to'=>'required',
            'from'=>'required',
        ]);
        $response = Message::query()->select('*')->where('user_id',$validatedData['user_id'])->where('restaurant_id',$validatedData['restaurant_id'])->orderBy('updated_at', 'desc')->get();
        return json_encode($response);
    }

}
