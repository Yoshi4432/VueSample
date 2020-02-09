<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * ユーザ管理を行うマスタメンテ.
 *
 * @author kosuke
 *
 */
class UserController extends Controller
{
    public function index()
    {
        return view('user/index');
    }
}
