<?php

namespace App\Services;
use App\user;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function register($data)
    {
        $data['password']=bcrypt($data['password']);
        //加密密碼
        User::create($data);
    }
}