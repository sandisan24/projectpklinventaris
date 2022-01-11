<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Izin Admin',
        ]);
        // $pengguna = Role::create([
        //     'name' => 'pengguna',
        //     'display_name' => 'Izin Pengguna',
        // ]);

        // $kasir = Role::create([
        //     'name' => 'kasir',
        //     'display_name' => 'Izin Pengguna',
        // ]);

        $useradmin = new User();
        $useradmin->name = 'Sandi Suryadi';
        $useradmin->email = 'sandi@gmail.com';
        $useradmin->password = Hash::make('12345678');
        $useradmin->save();

        $useradmin->attachRole($admin);

        // $userpengguna = new User();
        // $userpengguna->name = 'SanSan';
        // $userpengguna->email = 'sandi@gmail.com';
        // $userpengguna->password = Hash::make('12345678');
        // $userpengguna->save();

        // $userpengguna->attachRole($pengguna);

        // $userkasir = new User();
        // $userkasir->name = 'jajang';
        // $userkasir->email = 'jajang@gmail.com';
        // $userkasir->password = Hash::make('12345678');
        // $userkasir->save();

        // $userkasir->attachRole($kasir);

        // $userkasir2 = new User();
        // $userkasir2->name = 'siti';
        // $userkasir2->email = 'siti@gmail.com';
        // $userkasir2->password = Hash::make('12345678');
        // $userkasir2->save();

        // $userkasir2->attachRole($kasir);

    }
}
