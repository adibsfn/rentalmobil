<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mobil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Adib Shofiudin',
            'address' => 'cilegon',
            'number' => '087774649640',
            'sim' => '12312312',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'roles' => 'admin',
        ]);
        User::create([

            'name' => 'Asep',
            'address' => 'serang',
            'number' => '089671231',
            'sim' => '123456',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'roles' => 'user',

        ]);

        Mobil::create([
            
            'merk' => 'Suzuki',
            'model' => 'Ertiga',
            'plat_no' => 'A2121ST',
            'tarif' => '200000',
            'status' => 'tersedia',

        ]);
        Mobil::create([
            
            'merk' => 'Toyota',
            'model' => 'Avanza',
            'plat_no' => 'A2031RS',
            'tarif' => '190000',
            'status' => 'tersedia',

        ]);

       
     
    }
}
