<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->string('title', 50)->after('name'); // 作ったカラムの列を指定したい場合はafter->を書くと指定できる
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            // ここに書いてmigrateしてもカラムは消されない
            // ロールバックした時に消したいカラムをここに書いている
            $table->dropColumn('title'); // dropColumnでカラムが消せる
        });
    }
};
