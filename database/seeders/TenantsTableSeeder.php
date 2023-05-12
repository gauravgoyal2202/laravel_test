<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::factory()->count(5)->create();
    }
}
