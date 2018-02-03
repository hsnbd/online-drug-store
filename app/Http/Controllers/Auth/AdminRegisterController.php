<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Validator;
use Auth;
class AdminRegisterController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }
    protected $redirectTo = '/admin';

    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $this->validator($request->all())->validate();
        $admin = $this->create($request->all());
        Auth::guard('admin')->login($admin);
        return redirect($this->redirectTo);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        if (!Admin::where('email','=',$data['email'])->first()) {
            return Admin::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
        return redirect()->back()->withInput($request->only('email'))->withErrors($errors);
    }
}
