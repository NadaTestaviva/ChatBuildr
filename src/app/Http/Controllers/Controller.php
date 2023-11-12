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
            'name' => "test chatbot"
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
}
