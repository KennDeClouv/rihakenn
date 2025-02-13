<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ChallengeSeeder;
use Database\Seeders\RewardSeeder;
use Database\Seeders\PenaltySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ChallengeSeeder::class,
            RewardSeeder::class,
            PenaltySeeder::class,
        ]);
    }
}
