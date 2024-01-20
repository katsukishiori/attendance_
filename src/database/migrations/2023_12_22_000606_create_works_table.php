<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->datetime('work_start');
            $table->datetime('work_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Schema::table('users', function (Blueprint $table) {
        //     // マイグレーションのロールバック時に user_id カラムと外部キー制約を削除
        //     $table->dropForeign(['user_id']);
        //     $table->dropColumn('user_id');
        // });

        Schema::dropIfExists('works');
    }
}
