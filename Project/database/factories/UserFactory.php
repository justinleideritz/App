<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
    public function definition (): array
    {

        return [
            'USE_Name'       => fake()->name(),
            'USE_Email'      => fake()->unique()->safeEmail(),
            'USE_Password'   => static::$password ??= Hash::make( 'password' ),
            'USE_IsLoggedIn' => 0,
            'USE_Deleted'    => 0,
            'USE_IsAdmin'    => 0,
        ];
    }
}
