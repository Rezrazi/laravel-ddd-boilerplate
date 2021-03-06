<?php

namespace Domain\User\Database\Seeders;

use Database\Seeders\DatabaseSeeder;
use Domain\User\Models\User;

class UsersTableSeeder extends DatabaseSeeder
{
    public function run()
    {
        User::factory()->count(10)->create();
    }
}
