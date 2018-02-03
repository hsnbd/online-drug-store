<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        return view('admin.customers', compact('users'));
    }
    /**
    * @param id
    */
    public function destroy($id)
    {
        if (User::destroy($id)) {
            return redirect()->back()->withSuccess('Record Deleted Successful');
        }
        return redirect()->back()->withErrors('Record Deleted Successful');
    }
    /**
    * @param id
    */
    public function status($id)
    {
        $user = User::find($id);
        if ($user->status) {
            $user->status = 0;
            $user->save();
            return redirect()->back()->withSuccess('Customer Status Inactive Now');
        }
        $user->status = 1;
        $user->save();
        return redirect()->back()->withSuccess('Customer Status Active Now');
    }

}
