<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\users;

class usersController extends Controller
{
    public function signUp(Request $reg)
    {
        $validate = Validator::make($reg->all(),
            [
                "names" => 'required',
                "sekond_name" => 'required',
                "login" => 'required',
                "password" => 'required|min:6',
            ]);
        if($validate->fails())
        {
            return response()->json(
                [
                    "message"=>$validate->errors(),
                ]
            );
        }
        users::create($reg->all());
        return response()->json("norm");
    }
}
