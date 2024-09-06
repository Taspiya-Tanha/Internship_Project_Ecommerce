<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->assignRole('admin');;
        $user->save();

        $user = new User();
        $user->name = 'Md Manager';
        $user->email = 'manager@gmail.com';
        $user->password = Hash::make('12345678');
        $user->assignRole('manager');
        $user->save();


        $user = new User();
        $user->name = 'Md Editor';
        $user->email = 'editor@gmail.com';
        $user->password = Hash::make('12345678');
        $user->assignRole('editor');
        $user->save();


        $user = new User();
        $user->name = 'Md Seller';
        $user->email = 'seller@gmail.com';
        $user->password = Hash::make('12345678');
        $user->assignRole('seller');
        $user->save();


        $user = new User();
        $user->name = 'Md Buyer';
        $user->email = 'buyer@gmail.com';
        $user->password = Hash::make('12345678');
        $user->assignRole('buyer');
        $user->save();
    }
}
