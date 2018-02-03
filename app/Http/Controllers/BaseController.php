<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\EmailConfirm;
class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    /**
     * Confirm email after registration
     * @param token
     * @return redirect()
     */
    public function confirmEmail($token)
    {
        $verifyUser = EmailConfirm::where('token', $token)->first();
        if ($verifyUser) {
            $user = $verifyUser->user;

            if(!$user->status) {
                $verifyUser->user->status = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->withSuccess("Sorry your email cannot be identified.");
        }

        return redirect('/login')->withSuccess($status);
    }
}
