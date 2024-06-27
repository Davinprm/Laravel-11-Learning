<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     // use php artisan tinker to generate these method
     // App\Models\User::factory()->create() to create user with these fake data
     public function definition(): array
     {
         $name = fake()->name();
         $username = str_replace(" ",".", strtolower($name));
         return [
             'name' => $name,
             'username' => $username,
             'email' => fake()->unique()->safeEmail(), 
             'password' => static::$password ??= Hash::make('Password'),
             'email_verified_at' => now(),
             'remember_token' => Str::random(10), 
             'created_at'=> $this->faker->dateTimeThisYear($max = 'now', $timezone = null) 
         ];
     }

    /**
     * Indicate that the model's email address should be unverified.
     */
    // App\Models\User::factory()->unvverified()->create() to create user with unferivied email
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    // App\Models\User::factory()->admin()->create() to create user with admin privillege
    // public function admin(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'is_admin' => true,
    //     ]);
    // }
}
