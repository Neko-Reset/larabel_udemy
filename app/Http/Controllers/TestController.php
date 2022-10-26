<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    // indexの処理
    public function index ()
    {
        // railsのUser.allと一緒
        // Eloquent(エロクアント)
        $values = Test::all(); //Eloquent/Collection

        $count = Test::count(); //数字

        $first = Test::findOrFail(1); //インスタンス

        $whereBBB = Test::where("test", "=", "bb"); //Eloquent/Builder
        $whereBB = Test::where("test", "=", "bb")->get(); //Collection
        // 処理を止めて内容を確認できる
        // railsのconsol + User/allでレコードが出ている状態
        // dd( $values );
        dd($values, $count,$first,$whereBBB);

        // compact()関数で渡すと楽 compactの中身の変数は$がいらなくなる
        return view( "tests.test", compact( "values" ) ); //view( "フォルダ名.ファイル名" );
    }
}
