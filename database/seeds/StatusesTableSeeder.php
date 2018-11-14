<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
        [
            "id" => "1",
            "statu" => "libre"
        ],
        [
            "id" => "2",
            "statu" => "occupé"
        ],
        ]);
    }
}