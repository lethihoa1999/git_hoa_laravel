<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function index()
    {
        $users = User::listUser();

        return view('users.list', compact('users'));
    }

    public function store(UserRequest $request) 
    {
        $request->validated();
        $data = User::createUser($request);
        if ($data) {
            return redirect()->route('users.index')->with('success','Thêm mới người dùng thành công.');
       }
       
       return redirect()->route('users.index')->with('fail','Thêm mới người dùng thất bại.');
    }
}
