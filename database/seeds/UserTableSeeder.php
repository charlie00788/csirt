<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
        $this->createUserCharlie();
        $this->createAdmin();
        $this->createSupervidor();
    }

    private function createUser()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '200',
            'role'   => 'user',
            'unity_id' => '6'
        ]);
    }

    private function createUserCharlie()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '100',
            'role'   => 'user',
            'email' => 'charlie00788@hotmail.com',
            'password'  => bcrypt('charlie'),
            'unity_id'  => '2'
        ]);
    }

    private function createAdmin()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '300',
            'role'   => 'admin',
            'unity_id'  => '1'
        ]);
    }

    private function createSupervidor()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '400',
            'role'   => 'supervisor',
            'unity_id'  => '1'
        ]);
    }
}
