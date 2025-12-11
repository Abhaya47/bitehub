<?php

namespace App\Http\Controllers;

use App\Livewire\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function sendMessage(Request $request){
        $response= [
            'message' => $request['message'],
            'user_id' => $request['user_id'],
            "status" => "success",
        ];
        return json_encode(["message"=>"message send successfully",
            "data"=>$response
            ]);
    }

    public function receiveMessage(Request $request){
        $validated_data=request()->validate([
            'id'=>'required',
            'to'=>'required',
            'from'=>'required',
        ]);

    }

    public function receiveAllMessages(Request $request){

    }

    public function getRestaurant(Request $request){

    }
}
