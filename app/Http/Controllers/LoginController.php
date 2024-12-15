<?php

namespace App\Http\Controllers;

use Hash;
use Validator;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login()
    {
        return view('user.login'); 
    }

    public function register()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'address', 'customer_wa', 'email', 'password', 'passwordConfirmation');
        $validasi = Validator::make($data, [
            'name' => 'required|string',
            'address' => 'required|string',
            'customer_wa' => 'required|integer',
            'email' => 'nullable|email',
            'password' => 'required',
            'passwordConfirmation' => 'required|same:password'
        ],[
            'name.required' => 'Nama harus diisi',
            'address.required' => 'Alamat harus diisi',
            'customer_wa.required' => 'Nomor WA harus diisi',
            'customer_wa.integer' => 'Nomor WA harus berupa angka',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.confirmed' => 'Password tidak sama',
            'passwordConfirmation.required' => 'Konfirmasi password harus diisi',
            'passwordConfirmation.same' => 'Konfirmasi password tidak sama'
        ]);
        if ($validasi->fails()) {
            return back()->withErrors($validasi)->withInput();
        }
        $data['password'] = Hash::make($data['password']);
        Customer::create($data);
        return redirect()->route('login')->with('success', 'Registrasi berhasil');
    }

    public function logins(Request $request)
    {
        $creds = $request->only('email', 'password');
        $validate = Validator::make(
            $creds,
            [
                'email' => 'required|exists:customers,email',
                'password' => 'required|string',
            ],
            [
                'email.required' => 'email is required',
                'email.exists' => 'Email not found',
                'password.required' => 'Password is required',
                'password.string' => 'Password must be string',
            ],
        );
        foreach ($validate->errors()->all() as $error) {
            return redirect()->to(route('login'))->with('error', $error);
        }
        $panitia = Customer::where('email', $creds['email'])->first();
        if (!$panitia || !Hash::check($creds['password'], $panitia->password)) {
            $error = !$panitia ? 'Akun belum terdaftar silahkan melakukan registrasi' : 'Invalid credentials';
            return redirect()->to(route('login'))->with('error', $error);
        }
        $request->session()->put('id', $panitia->id);
        $request->session()->put('email', $panitia->email);
        $request->session()->put('name', $panitia->name);
        return redirect()->to(route('user.home'));
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->to(route('login'));
    }
}
