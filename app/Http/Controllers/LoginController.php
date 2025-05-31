<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('register.create');
    }

    public function register(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $users = User::create([
            'name' => $validated['name'],
            'userName' => $validated['userName'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'remember_token' => Str::random(40),
        ]);

        Auth::login($users);

        return redirect()->route('index');
    }

    public function login()
    {
        return view('register.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'userName' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('index');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function listUser()
    {
        $users = User::all();

        return view('register.listUser', compact('users'));
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('login.list');
    }
}
