<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Reward;
use App\Models\Penalty;

class ChallengeController extends Controller
{
    public function index()
    {
        return view('challenge.index');
    }

    public function generate()
    {
        $challenge = Challenge::inRandomOrder()->first();
        $reward = Reward::where('level', $challenge->level)->inRandomOrder()->first();
        $penalty = Penalty::where('level', $challenge->level)->inRandomOrder()->first();

        return response()->json([
            'level' => $challenge->level,
            'challenge' => $challenge->description,
            'title' => $challenge->title,
            'reward' => $reward->description,
            'penalty' => $penalty->description
        ]);
    }

    public function getChallenges()
    {
        $challenges = Challenge::inRandomOrder()->limit(5)->get();
        $challenges = $challenges->map(function ($challenge) {
            $reward = Reward::where('level', $challenge->level)->inRandomOrder()->first();
            $penalty = Penalty::where('level', $challenge->level)->inRandomOrder()->first();
            return [
                'level' => $challenge->level,
                'title' => $challenge->title,
                'description' => $challenge->description,
                'reward' => $reward->description,
                'penalty' => $penalty->description
            ];
        });
        return response()->json([
            'success' => true,
            'data' => $challenges
        ]);
    }
}
