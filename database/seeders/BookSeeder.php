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
            'author_id' => 1,
            'publication_year' => '1973',
            'synopsis' => 'Bon livre'
        ]);

        DB::table('books')->insert([
            'title' => 'Bleach',
            'author_id' => 2,
            'publication_year' => '1997',
            'synopsis' => 'C\'est le feu !'
        ]);

        DB::table('books')->insert([
            'title' => 'a',
            'author_id' => 3,
            'publication_year' => '1997',
            'synopsis' => 'Bien le bonjour'
        ]);
    }
}
