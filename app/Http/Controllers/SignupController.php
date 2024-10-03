<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
class SignupController extends Controller
{
    public function CreateUser(SignupRequest $request)
    {
        if ($request->input('name') == 'valid' and $request->input('email') == 'valid') {
            $User = new User;
            $data =
                ['name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>$request->input('password')
        ];

        $User->name = $request->input('name');
        dd( $request->input('name'));
        $User->email = $request->input('email');
        $User->password = $request->input('password');
        $User->save();
         $response = Http::post(url('api/signup/',$data));

            return $response;}
            // Return 200 status code
         else {
            return view('signup'); // Return 400 status code
    }
}
}
