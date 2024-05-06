<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company(),
            'user_id' => User::factory(),
            'personal_team' => true,
        ];

        Team::factory()->count(5)->create();
        $u          = User::find(15);
        $u->name    =  'Lionel';
        $u->email   = 'hello@example.com';
        $u->password = bcrypt('password'); 
        $u->current_team_id = 1;
        $u->save();
        
        $t  = Team::find(1);
        $t->user_id = 15;
        $t->save();

    }

}
