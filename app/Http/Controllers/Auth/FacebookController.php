<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Auth;

class FacebookController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
            $fbuser = Socialite::driver('facebook')->user();
            $existingUser = User::where('email', $fbuser->email)->first();
        if($existingUser){
            // log them in
            Auth::loginUsingID($existingUser->id);
        } else {
            // create a new user
            $user = new User;
            $user->name= $fbuser->name;
            $user->email= $fbuser->email;
            $user->facebook_id= $fbuser->id;
            $user->password=md5(rand(1,10000));
            $user->save();
            Auth::loginUsingID($user->id);
        }
        return redirect()->to('/home');
    }
           
        catch (Exception $e) {

            return 'error';

        }
    }
}