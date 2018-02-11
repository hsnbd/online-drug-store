<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::paginate(5);
        return ( request()->wantsJson() ) ? response()->json($users) :
                                          view('admin.customers')->with('users', $users);
    }

    public function show($id)
    {
      $user = User::find($id) ?: "Something Wrong";
      return response()->json($user);
    }
    /**
    * @param id
    */
    public function destroy($id)
    {
        return User::destroy($id) ?
                response()->json("User Deleted Successful") :
                          response()->json("Something Wrong!!!");
    }
    /**
    * @param id
    * To change User Status
    */
    public function status($id)
    {
        $user =  User::find($id);
        $status = $user->status ? 'Customer Status Inactive Now' : 'Customer Status Active Now';

        $user->status = !$user->status;
        $user->save();
        return response()->json($status);
    }

}
