<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = User::firstOrNew(['provider_id' => $user->getId()]);

        $authUser->name = $user->getName();
        $authUser->email = $user->getEmail();
        $authUser->provider = $provider;
        $authUser->provider_id = $user->getId();
        $authUser->status = 1;

        $authUser->save();

        auth('web')->login($authUser);
        return redirect('/home');
    }
}
