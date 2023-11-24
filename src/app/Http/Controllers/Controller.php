<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use File;
use App\Models\User;
use App\Models\Chatbot;
use App\Models\UploadFile;
use Log;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploaddoc(Request $request){
        
        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->storeAs('public/files',$fileName);
        $userId = $request->user;

        
        $chatbot = Chatbot::create([
            'user_id' => $userId,
            'name' => $request->chatbotName
        ]);

        $uploadedFile = UploadFile::create([
            'user_id' => $userId,
            'name' => $fileName,
            'chatbot_id' => $chatbot->id
        ]);

        Chatbot::where('id' , $chatbot->id)->update(['file_id' => $uploadedFile->id]); 
        return response()->json(['success'=>'You have successfully upload file.']);
    }


    public function chatbots(Request $request){
        $userId = $request->getContent();
        $chatbots = Chatbot::where('user_id',$userId)->get();
        Log::info($chatbots);
        return $chatbots;
    }

    public function user_edit(Request $request){
        $userId = $request->id;
        User::where('id',$userId)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone
        ]);

         User::whereId($userId)->update([
            'password' => Hash::make($request->password)
        ]);
        return response()->json(['success'=>'You have successfully updated user Data.']);
    }
}
