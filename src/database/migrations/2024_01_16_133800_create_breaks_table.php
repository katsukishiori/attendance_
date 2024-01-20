<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->constrained('works')->default(1);;
            $table->datetime('break_start');
            $table->datetime('break_end');
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


        Schema::dropIfExists('breaks');
    }
}
