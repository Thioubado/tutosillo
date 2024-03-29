<?php

/**
 * (ɔ) Mo & GrCOTE7 - 2022-2024
 */

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		\App\Models\User::factory(10)->create();

		// seeder de film factoty
		//  Film::factory() -> count(10) -> create();

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		Category::factory()
			->has(Film::factory()->count(4))
			->count(10)
			->create();
	}
}
