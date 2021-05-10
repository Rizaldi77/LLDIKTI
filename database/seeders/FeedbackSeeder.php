<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('feedback')->insert([
            'instansi'      => 'Percobaan',
            'no_urut'      => '1',
            'gab_nourut'   => 'A1',
            'date'      => '2021-05-10'
        ]);

        \DB::table('feedback')->insert([
            'instansi'      => 'Percobaan',
            'no_urut'      => '1',
            'gab_nourut'   => 'A1',
            'date'      => '2021-05-11'
        ]);
    }
}