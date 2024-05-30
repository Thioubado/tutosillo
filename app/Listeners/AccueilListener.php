<?php

/**
 * (ɔ) Mo & GrCOTE7 - 2022-2024
 */

namespace App\Listeners;

use App\Events\Accueil as AcceuilEvent;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AccueilListener
{
	/**
	 * Create the event listener.
	 */
	public function __construct()
	{
	}

	/**
	 * Handle the event.
	 */
	public function handle(): void
	{
		DB::table('visits')->insert([
			'ip'         => request()->ip(),
			'created_at' => Carbon::now(),
		]);
	}
}
