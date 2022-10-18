<?php


namespace Database\Seeders;



use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = User::create([
       	'userid' =>'admin101',
       	'name'=>'Admin',
       	'email' =>'admin@admin.com',
       	'password' =>bcrypt('admin'),


       ]);


        $user = User::create([
       	'userid' =>'user101',
       	'name'=>'User',
       	'email' =>'user@user.com',
       	'password' =>bcrypt('user'),


       ]);
    }
}
