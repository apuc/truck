<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {


    public function run() {

        $min_date = strtotime('2019-01-01 00:00:00');
        $max_date = strtotime('now');

        for($i = 0; $i != 100; $i++){
            $date = new DateTime(date('Y-m-d H:i:s', rand($min_date, $max_date)));
            $phone = '';
            for($j = 0; $j != 12; ++$j)
                $phone .= rand(0,9);

            DB::table('users')->insert([
                'name' => Str::random(15),
                'phone' => $phone,
                'verification_code' =>(string) mt_rand(100000, 999999),
                'password' => bcrypt('secret'),
                'created_at' => $date,
                'phone_verified_at' => (mt_rand(0, 100)) < 50 ? $date->modify('+' . mt_rand(1, 10) . ' days') : null
            ]);
        }


    }
}
