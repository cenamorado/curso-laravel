<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->times(15)->create();
        // User::create(["name" => "Luis","email" => "cel@504digital.com","password" => "asdasdasd"]);
    }
}
