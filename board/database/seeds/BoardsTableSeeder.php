<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            'name' => 'CSM',
            'format' => 'json'
        ],
            [
                'name' => 'CSMB',
                'format' => 'xml'
            ] );
    }
}
