<?php

use Illuminate\Database\Seeder;
use EncDoc\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Carlos Dagorret',
            'email' => 'dagorret@gmail.com',
            'dni'   => '01',
            'admin' => true,
            'password' => bcrypt('secret'),
        ]);

/**        DB::table('users')->insert([
            'name' => 'Carlos Otro',
            'email' => 'dagorret@fce.unrc.edu.ar',
            'dni' => '02',
            'admin' => false,
            'password' => bcrypt('secret'),
        ]);
*/

//        factory(User::class)->times(300)->create();
    }
}
