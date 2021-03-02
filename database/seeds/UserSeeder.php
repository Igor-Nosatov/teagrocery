<?php

use Illuminate\Database\Seeder;
use App\Entity\User;
class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@devtest.com";
        $user->password = bcrypt('secret');
        $user->is_admin = true;
        $user->save();
    }
}
