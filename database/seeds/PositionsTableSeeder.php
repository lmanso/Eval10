<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postions')->insert([
        [
            "id" => "1",
            "position" => "hall"
        ],
        [
            "id" => "2",
            "position" => "étage 1"
        ],
        [
            "id" => "3",
            "position" => "étage 2"
        ],
        ]);
    }
}
