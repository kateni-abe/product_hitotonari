<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Task;

/* 登録する内容の設定*/
/* ここで設定した内容をseederを使うことでデータベースへ送ることができる */

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(rand(15,40)),
            'is_done' => $this->faker->boolean(10),
            'created_at' =>now(),
            'updated_at' =>now()
        ];
    }
}
