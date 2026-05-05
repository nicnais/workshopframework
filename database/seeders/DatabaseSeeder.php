<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Menu;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $vendor = Vendor::firstOrCreate([
            'nama_vendor' => 'Kantin Utama',
        ]);

        User::updateOrCreate(
            ['email' => 'combyn559@gmail.com'],
            [
                'name' => 'Vendor Kantin',
                'password' => Hash::make('password'),
                'role' => 'vendor',
                'vendor_id' => $vendor->idvendor,
                'email_verified_at' => now(),
            ]
        );

        Menu::firstOrCreate(
            [
                'idvendor' => $vendor->idvendor,
                'nama_menu' => 'Nasi Goreng Spesial',
            ],
            [
                'harga' => 18000,
                'path_gambar' => null,
                'is_available' => true,
            ]
        );

        Menu::firstOrCreate(
            [
                'idvendor' => $vendor->idvendor,
                'nama_menu' => 'Es Teh Manis',
            ],
            [
                'harga' => 5000,
                'path_gambar' => null,
                'is_available' => true,
            ]
        );
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
    }
}
