<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([

          'name' => 'Disney Experience Hotel',
          'stars' => 5,
          'created_at' => new DateTime,
          'updated_at' => new DateTime

        ]);

        DB::table('hotels')->insert([

          'name' => 'Cartoon Dreams Hotel',
          'stars' => 3,
          'created_at' =>new DateTime,
          'updated_at' => new DateTime

        ]);
    }
}
