<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AssignmentController extends Controller
{
    public function one(Request $request):string{

        $name=$request->input('name');

        return "my name is ${name}";
    }
    public function two(Request $request):string{

        $userAgent=$request->header('User-Agent');

        return ${userAgent};
    }
    public function three(Request $request):string{
        $page = $request->page;

        return ${page};


    }
    public function four(Request $request):JsonResponse{

        $message="success";
        $data= array('name'=> "John Doe", 'age'=>"25");


        return response()->json($data,$message);

    }
    public function five(Request $request):array{

        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = $file->storeAs('uploads', $Filename, 'public');
    }
    public function six():string{

        $rememberToken = $request->cookie('remember_token', null);

        return $request->cookie($rememberToken);

    }
    public function seven(Request $request):JsonResponse{

        $email=$request->email;
        $data= array("success"=> "true", "message"=>"Form submitted successfully.");

        return response()->json($email,$data);

    }
}
