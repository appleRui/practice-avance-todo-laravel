<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;


class TodoController extends Controller
{
	/**
	 * 一覧画面
	 */
	public function index(){
		$tag = Tag::all();
		// 認証しているユーザー情報
		$user = Auth::user();
		// 全データの取得
		$todos = Todo::all();
		// bladeに渡す
		return view('index', ['todos' => $todos]);
	}
}
