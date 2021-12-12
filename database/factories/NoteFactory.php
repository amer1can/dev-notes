<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($this->faker->randomDigit(), $variableNbWords = true),
            'text' => $this->faker->text(500),
            'category' => $this->faker->randomElement(array('laravel', 'vue')),
            'tags' => $this->faker->word(),
            'auth_only' => $this->faker->boolean(35),
        ];
    }
}
