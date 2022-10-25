<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    // indexの処理
    public function index ()
    {
        //railsのUser.allと一緒
        $values = Test::all();

        // 処理を止めて内容を確認できる
        // railsのconsol + User/allでレコードが出ている状態
        // dd( $values );

        // compact()関数で渡すと楽 compactの中身の変数は$がいらなくなる
        return view( "tests.test", compact( "values" ) ); //view( "フォルダ名.ファイル名" );
    }
}
