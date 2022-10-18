<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= Role::create(['name'=>'admin201']);
        $user= Role::create(['name'=>'user201']);
        $suspend= Role::create(['name'=>'suspend']);
    }
}
