<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class WorksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'user_id' => 1,
      'work_start' => Carbon::createFromFormat('H:i:s', '10:00:00'),
      'work_end' => Carbon::createFromFormat('H:i:s', '20:00:00'),
    ];
    DB::table('works')->insert($param);
    $param = [
      'user_id' => 1,
      'work_start' => Carbon::createFromFormat('H:i:s', '10:00:10'),
      'work_end' => Carbon::createFromFormat('H:i:s', '20:00:00'),
    ];
    DB::table('works')->insert($param);
  }
}
