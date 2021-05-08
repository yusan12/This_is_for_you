<?php

use Illuminate\Database\Seeder;

class UserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_entry')->insert([
           'title' => "ダミータイトル",
           'body' => "ダミー本文です",
       ]);
    }
}
