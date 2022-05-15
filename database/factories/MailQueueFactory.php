<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MailQueue>
 */
class MailQueueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from' => $this->faker->email(),
            'to' => $this->faker->email(),
            'subject' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'sent' => $this->faker->numberBetween(0, 1),
        ];
    }
}
