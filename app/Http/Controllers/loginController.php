<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function loginProses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required | min:8'
        ]);

        $credentials = request(['username', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard')->with('success', 'Berhasil login');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login')->with('success', 'Berhasil logout');
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        if ($request->password == null) {
            $data->update([
                'username' => $request->username,
                'email' => $request->email
            ]);
        } else {
            $data->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
        }
        return redirect()->back()->with('success', 'Profile berhasil diupdate');
    }



}
