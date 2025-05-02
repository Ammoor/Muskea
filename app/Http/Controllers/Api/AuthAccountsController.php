<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthAccountsController extends Controller
{
    public function googleRequest()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect()
    {
        $user = Socialite::driver('google')->user();

        // dd($user);
    }
    public function facebookRequest()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedirect()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token
    }
}
