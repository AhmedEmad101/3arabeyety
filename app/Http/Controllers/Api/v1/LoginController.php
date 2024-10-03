<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
  public function Signup(SignupRequest $request)
  {
    $user = User::create($request->all());
      //  return response()->json($user);
      return redirect('index')->with('success','Account created successfully');
  }
  public function Login(LoginRequest $request)
  {
    $user = User::where('email',$request->email)->first();
    if(!$user||!Hash::check($request->password,$user->password))
    {
        return response()->json(['error'=>'Your login credentials are wrong'],422);
    }
    $device = substr($request->userAgent() ??'', 0,255);
    return response()->json(
        ['access_token'=>$user->createToken($device)->plainTextToken
        ,'id'=>$user->id
        ,'name'=>$user->name
        ,'email'=>$user->email]
    );
  }
  public function logout(Request $request)
    {
        // Revoke the current user's token
        //$request->user()->currentAccessToken()->delete();
        if ($request->user()) {
            $request->user()->currentAccessToken()->delete();
        }

        // Optionally return a response
        return response()->json([
            'message' => 'Logged out successfully'
        ], 200);
    }
    public function dashboard(Request $request)
{
    $user = Auth::user();
    dd($user);
     // Get the authenticated user

    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);  // Handle unauthenticated user
    }
    $accessToken = $user->currentAccessToken()->token;

    return view('dashboard', compact('user'));
}}
