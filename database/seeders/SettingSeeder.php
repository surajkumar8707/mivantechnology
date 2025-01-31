<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Mivantechnology',
            'email' => 'mivantechnology@gmail.com',
            'whatsapp' => '8707633860',
            'contact' => '8707633860',
            'address' => 'Address',
            'header_image' => "assets/front/images/rh_logo.png",
            'is_fresh' => 1,
        ]);
    }
}
