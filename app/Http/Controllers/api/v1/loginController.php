<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    function register(Request $request)
    {
        /**
         * Get a validator for an incoming registration request.
         *
         * @param  array  $request
         * @return \Illuminate\Contracts\Validation\Validator
         */
        $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $user = User::create($data);
        return response($user, 200);
    }




    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!User::find($login)) {
            return response(['massage' => 'invalid login credentials.']);
        }
        $user = User::find(1);
        $accessToken =  $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);

        /*

        // Creating a token without scopes...
        //   $token = $user->createToken('Token Name')->accessToken;

        // Creating a token with scopes...
        //   $token = $user->createToken('My Token', ['place-orders'])->accessToken;
*/
    }
}
