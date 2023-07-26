<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'root admin']);
        Role::create(['name' => 'super admin']);
        Role::create(['name' => 'Kepala Divisi Gudang']);
        Role::create(['name' => 'Divisi Administrasi']);
        Role::create(['name' => 'Divisi Marketing']);
        Role::create(['name' => 'Divisi Logistik']);
        Role::create(['name' => 'Karyawan Divisi Gudang']);


        // $user = User::create([
        //     'name' => 'Jeffri Dian Asmoro',
        //     'email' => 'jeffridianasmoro@gmail.com',
        //     'password' => Hash::make('12345678'),
        // ]);
        // $user->syncRoles('root admin');
        $user1 = User::create([
            'name' => 'Admin Gudang',
            'email' => 'admingudang@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $user1->syncRoles('root admin');
    }
}
