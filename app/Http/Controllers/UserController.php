<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-8-1
 * Time: 11:11
 */
namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}





























