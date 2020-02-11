<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

/**
 * ユーザ管理を行うマスタメンテ.
 *
 * @author kosuke
 *
 */
class UserController extends Controller
{

    /**
     * 初期表示.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory 表示ビュー
     */
    public function index()
    {
        return view('user/index');
    }

    /**
     * ユーザの検索結果を返却する.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\User[] ユーザ情報配列
     */
    public function vueSearch()
    {
        /* 検索 */
        $users = User::all();

        /* 返却 */
        return $users;
    }
}
