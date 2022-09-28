<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password], $request->remember)){
                $user = 
                    [
                        'id' => Auth::user()->id,
                        'name' => Auth::user()->name,
                        'avatar' => Auth::user()->avatar,
                        'email' => Auth::user()->email,
                        'password' => Auth::user()->password,
                    ]
            ;
                session()->put('user', $user);
            
                return redirect()->route('home');
            
        }
        return back()->with('msg', 'Tài khoản/mật khẩu không chính xác');
    }
    public function register(){
        return view('auth.register');
    }
    public function saveregister(RegisterRequest $request){
        $model = new User();
        $model->fill($request->all());
        $model->password = Hash::make($request->password);
        $model->assignRole('member');
        $model->save();
        return redirect()->route('home');
    }
    public function resetpassword(){
        return view('auth.resetpassword');
    }
    public function saveresetpassword(Request $request){
        $email = $request->email;
        $model = User::all()->where('email', $email)->first();
        if($model==null){
            return back()->with('msg', 'Email không tồn tại');
        }else{
            $model->password = Hash::make($request->password);
            $model->save();
            return redirect()->route('login')->with('msg', 'Đổi mật khẩu thành công');
        }
    }
    public function logout(){
        session()->forget('user');
        Auth::logout();
        return redirect()->route('login');
    }
}