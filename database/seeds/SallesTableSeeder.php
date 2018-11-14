<?php

use Illuminate\Database\Seeder;

class SallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('salles')->insert([
        [
            "id" => "1",
            "name" => "Poudlard",
            "position_id" => "1",
            "statu_id" => "1",
        ],
        [
            "id" => "2",
            "name" => "SpaceX",
            "position_id" => "2",
            "statu_id" => "2",
        ],
        [
            "id" => "3",
            "name" => "SpaceX",
            "position_id" => "3",
            "statu_id" => "1",
        ],
        ]);
    }
}
