<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categoriesという名前のtableni下記を入れてる
        DB::table('Categories')->insert([
            ['category_name' => 'book'],
            ['category_name' => 'cafe'],
            ['category_name' => 'travel']
        ]);
    }
}
