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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 20);
            $table->string('email', 255);
            $table->longText('url')->nullable(); // nullableを入れるとnullでも許可できる
            $table->boolean('gender'); // 2択はboolean
            $table->tinyInteger('age'); // 少ない数字
            $table->string('contact', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
};
