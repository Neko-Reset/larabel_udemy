<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// この記述でデータベースからTestテーブルの情報が取れる
use App\Models\Test;

// クエリビルダが使えるための記述
use Illuminate\Support\Facades\DB;



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

        $whereBBB = Test::where("text", "=", "bb"); //Eloquent/Builder
        $whereBB = Test::where("text", "=", "bb")->get(); //Collection

        // クエリビルダ
        $query = DB::table('tests')->where('text', '=', 'bb')
        ->select('id', 'text')
        ->get();


        // 処理を止めて内容を確認できる
        // railsのconsol + User/allでレコードが出ている状態
        // dd( $values );
        dd($values, $count,$first,$whereBBB, $query);

        // compact()関数で渡すと楽 compactの中身の変数は$がいらなくなる
        return view( "tests.test", compact( "values" ) ); //view( "フォルダ名.ファイル名" );
    }
}
