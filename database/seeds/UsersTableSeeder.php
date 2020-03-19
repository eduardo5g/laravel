<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create register fakes
        // call with : php artisan db:seed --class=UserTableSeeder
        factory(User::class, 10)->create();
        /*
        User::create([
            'name' => 'Eduardo Ferreira',
            'email' => 'localsoft@hotmail.com',
            'password' => bcrypt('123456789'),
        ]);
        */
    }
}
