<?php

use Illuminate\Database\Seeder;
use App\UserEntry;
class UserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserEntry::create([
			"title" => "UserEntryクラスで作成したtitle",
			"body" => "UserEntryクラスで作成したbody"
		]);
    }
}
