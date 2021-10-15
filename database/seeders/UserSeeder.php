<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('12345678');
        DB::table('users')->insert([
            [
                'name'=>'Ho Trung Nhan',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Huu Thien Phu',
                'address'=>'DH Can Tho',
                'phone'=>'0898007389',
                'password'=>$password,
                'role_id'=>2,
            ],
            [
                'name'=>'Vo Van Khanh',
                'address'=>'DH Can Tho',
                'phone'=>'0328494707',
                'password'=>$password,
                'role_id'=>1,
            ]
        ]);
    }
}