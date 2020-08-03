<?php

use Illuminate\Database\Seeder;

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
            [
                'last_name' => '名無し',
                'first_name' => '太郎',
                'birthday' => '20200803',
                'gender' => 'male',
                'note' => '',
            ],
            [
                'last_name' => '名無し',
                'first_name' => '花子',
                'birthday' => '20200803',
                'gender' => 'female',
                'note' => '',
            ]
        ]);
    }
}
