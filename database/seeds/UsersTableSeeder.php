<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name='konrax';
        $user->email='konrax54@gmail.com';
        $user->password=bcrypt('KC1234');
        $user->save();
        $user->roles()->attach(1);
    }
}
