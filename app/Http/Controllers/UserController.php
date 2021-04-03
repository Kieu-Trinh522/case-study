<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function show()
    {
      $users=User::all();
      return view('logins.listUser',compact('users'));
    }

public function index()
{
    $users = User::all();
    return view('logins.login', compact('users'));
}

    public function create()
    {
        return view('logins.authenticate');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->level = "User";
        $user->save();
        return redirect()->route('user.index');
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->only('email', 'password');
        $credentials = ['email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            Session::regenerate();
            Session::push('login',true);
            return redirect()->route('frontend.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('logins.login');
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('logins.editUser',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $user->level=$request->level;
        $user->save();
        return redirect()->route('user.show');
    }
}
