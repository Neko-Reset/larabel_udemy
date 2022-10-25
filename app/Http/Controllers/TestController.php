<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // indexの処理
    public function index ()
    {
        return view( "tests.test" ); //view( "フォルダ名.ファイル名" );
    }
}
