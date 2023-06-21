<?php

use Illuminate\Database\Seeder;

class tbl_72210461 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_72210461')->insert([
            'article_title' => 'Jurnal Winner',
            'article_date' => '2023-09-09',
            'article_text' => 'Jurnal Kemenangan',
             ]);
    }
}
