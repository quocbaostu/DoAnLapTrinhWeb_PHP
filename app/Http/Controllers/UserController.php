<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getListUser(){
        $user = users::all();
        return view('admin.user.listuser', compact('user'));
    }

    public function getDangky(){
        return view('page.dangky');
    }

    public function postDangky(Request $request){
        $this->validate($request,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:100',
                'name'=>'required',
                'address'=>'required',
                'phone'=>'required|unique:users,phone',
                're-password'=>'required|same:password'
            ],[
                'email.required' => 'Vui lòng nhập email',
                'email.email'=>'Email không hợp lệ',
                'email.unique'=>'Email đã được đăng ký',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
                'name.required'=>'Vui lòng nhập họ tên',
                'address.required'=>'Vui lòng nhập địa chỉ',
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'phone.unique'=>'Số điện thoại đã được đăng ký',
                're-password.required'=>'Vui lòng nhập mật khẩu xác nhận',
                're-password.same'=>'Mật khẩu xác nhận không trùng khớp'
            ]);

            $user = new users();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->name = $request->name;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->save();

            return redirect()->back()->with('thanhcong', 'TẠO TÀI KHOẢN THÀNH CÔNG');
    }

    public function getDangnhap(){
        return view('page.dangnhap');
    }

    public function postDangnhap(Request $request){
        $this->validate($request,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:1000'
        ],[
            'email.required'=>'Vui lòng nhập email đăng nhập',
            'email.email'=>'Email nhập không hợp lệ',
            'password.requried'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
        ]);
        // $credentials = array('email'=>$request->email, 'password'=>$request->password);
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->back()->with(['flag'=>'success', 'message'=>'ĐĂNG NHẬP THÀNH CÔNG']);
        }
        else {
            return redirect()->back()->with(['flag'=>'danger', 'message'=>'ĐĂNG NHẬP KHÔNG THÀNH CÔNG']);
        }
    }

    public function getDangxuat(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
