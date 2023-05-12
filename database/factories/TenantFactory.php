<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Tenant::class;
    public function definition()
    {
        return [
            'tenant_hash' => $this->faker->uuid,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Tenant $tenant) {
            User::factory()->count(5)->create(['tenant_id' => $tenant->id]);
        });
    }
}
