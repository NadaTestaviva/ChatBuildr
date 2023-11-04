<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use File;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploaddoc(Request $request){
        
        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        $userId = $request->user;
        User::where('id',$userId)->update(['file'=> $fileName]);
        $request->file->storeAs('public/files',$fileName);

        return response()->json(['success'=>'You have successfully upload file.']);
    }
}
