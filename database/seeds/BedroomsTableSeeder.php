<?php

use Illuminate\Database\Seeder;

class BedroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bedrooms')->insert([

        'hotel_id' => 1,
        'name' => 'Mickey Mouse',
        'status' => 'free',
        'beds' => 3,
        'created_at' => new DateTime,
        'updated_at' => new DateTime

      ]);

      DB::table('bedrooms')->insert([

        'hotel_id' => 1,
        'name' => 'Pandora',
        'status' => 'busy',
        'beds' => 5,
        'created_at' => new DateTime,
        'updated_at' => new DateTime

      ]);

      DB::table('bedrooms')->insert([

        'hotel_id' => 1,
        'name' => 'Aladino',
        'status' => 'not available',
        'beds' => 2,
        'created_at' => new DateTime,
        'updated_at' => new DateTime

      ]);

      DB::table('bedrooms')->insert([

        'hotel_id' => 2,
        'name' => 'Goofy',
        'status' => 'busy',
        'beds' => 4,
        'created_at' => new DateTime,
        'updated_at' => new DateTime

      ]);

      DB::table('bedrooms')->insert([

        'hotel_id' => 2,
        'name' => 'Winnie the pooh',
        'status' => 'not available',
        'beds' => 3,
        'created_at' => new DateTime,
        'updated_at' => new DateTime

      ]);

      DB::table('bedrooms')->insert([

        'hotel_id' => 2,
        'name' => 'Rayo McQueen',
        'status' => 'free',
        'beds' => 5,
        'created_at' => new DateTime,
        'updated_at' => new DateTime

      ]);

    }
}
