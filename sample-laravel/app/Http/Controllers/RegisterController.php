<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\User;

class RegisterController extends Controller
{
    public function valid(Request $request) 
    {
        $request->validate([
            'mail_address' => 'required|email|unique:users|max:100',
            'password' => 'required|alpha|max:255',
            'confirm_password' => 'required|alpha|max:255|same:password',
            'name' => 'required|max:255',
            'address' => 'max:255',
            'phone' => 'numeric|digits_between:1,15',
        ]);
        $data = new User();
        $query = $data->add_data($request);     
        if($query) {
            return redirect()->route('user')->with('success','Thêm mới người dùng thành công.');
        } else {
            return redirect()->route('user')->with('fail','Thêm mới người dùng thất bại.');
        }
    }

    public function show_table()
    {
    	$model = new User();
        $user = $model->table_show();
        return view('users')->with(compact('user'));
    }
}
