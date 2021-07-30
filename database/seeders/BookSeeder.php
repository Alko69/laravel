<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Test',
            'author' => 'Me',
            'publication_year' => '1973',
            'genre' => 'Action',
            'synopsis' => 'Bon livre'
        ]);

        DB::table('books')->insert([
            'title' => 'Bleach',
            'author' => 'Tite kubo',
            'publication_year' => '1997',
            'genre' => 'Action',
            'synopsis' => 'C\'est le feu !'
        ]);

        DB::table('books')->insert([
            'title' => 'a',
            'author' => 'T',
            'publication_year' => '1997',
            'genre' => 'Aventure'
        ]);
    }
}
