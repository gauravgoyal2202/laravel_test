<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Tenant;
use Faker\Factory as Faker;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Tenant::all()->each(function ($tenant) use ($faker) {
            $settings = [];

            // Generate random settings data
            $settings['theme'] = $faker->randomElement(['light', 'dark']);
            $settings['language'] = $faker->randomElement(['en', 'es', 'fr']);

            Setting::create([
                'key' => 'user_settings',
                'tenant_id' => $tenant->id,
                'value' => json_encode($settings),
            ]);
        });
    }
}
