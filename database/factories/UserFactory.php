<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Setting;


class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $user->setMeta('age', $this->faker->numberBetween(18, 60));
            $user->setMeta('address', $this->faker->address);
            $user->setMeta('phone', $this->faker->phoneNumber);
        })->afterCreating(function (User $user) {
            Setting::set('user_settings_' . $user->id, [
                'theme' => $this->faker->randomElement(['light', 'dark']),
                'language' => $this->faker->randomElement(['en', 'es', 'fr']),
            ]);
        });
    }
}
