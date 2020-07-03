<?php

use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            'priority_name' => 'urgent',
            'order' => 1
        ]);

        DB::table('priorities')->insert([
            'priority_name' => 'important',
            'order' => 2
        ]);

        DB::table('priorities')->insert([
            'priority_name' => 'ignore',
            'order' => 3
        ]);

        DB::table('priorities')->insert([
            'priority_name' => 'optional',
            'order' => 4
        ]);
    }
}
