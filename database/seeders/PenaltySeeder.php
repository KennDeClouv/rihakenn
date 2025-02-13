<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penalty;

class PenaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penalties = [
            [
                'level' => 'easy',
                'description' => '😈 Squirt Shower – Harus kena squirt langsung ke muka tanpa boleh ngelak!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Hydration Overload – Harus minum semuanya tanpa sisa!'
            ],
            [
                'level' => 'hard',
                'description' => '😈 Overflow Mode – Harus lanjut sampe keluar lagi tanpa berhenti!'
            ],
            [
                'level' => 'ultimate',
                'description' => '😈 Squirt Freeze – Harus diem total sampe pasangan selesai!'
            ],
            [
                'level' => 'hardcore',
                'description' => '😈 Squirt Trap – Setiap kali kena penalty lain, harus kena squirt juga!'
            ],
            [
                'level' => 'easy',
                'description' => '😈 Soaked Up – Gak boleh dilap atau dibersihin, harus nempel terus!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Bonus Round – Kena penalty ini berarti langsung ada sesi tambahan!'
            ],
            [
                'level' => 'hard',
                'description' => '😈 Drenched Mode – Harus biarin badan kena semua tanpa boleh mundur!'
            ],
            [
                'level' => 'ultimate',
                'description' => '😈 Squirt Lock – Gak boleh lanjut sampe pasangan squirt dulu!'
            ],
            [
                'level' => 'easy',
                'description' => '😈 Wet Kiss – Harus cium pasangan yang basah karena squirt!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Squirt Splash – Harus kena squirt di badan tanpa boleh ngelap!'
            ],
            [
                'level' => 'hard',
                'description' => '😈 Squirt Marathon – Harus bertahan dalam sesi squirt selama 10 menit!'
            ],
            [
                'level' => 'ultimate',
                'description' => '😈 Squirt Immersion – Harus kena squirt terus menerus selama 5 menit!'
            ],
            [
                'level' => 'hardcore',
                'description' => '😈 Squirt Challenge – Harus bikin pasangan squirt 3 kali berturut-turut!'
            ],
            [
                'level' => 'easy',
                'description' => '😈 Squirt Hold – Harus tahan squirt di mulut selama 1 menit!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Squirt Relay – Harus ganti posisi setiap kali pasangan squirt!'
            ],
            [
                'level' => 'hard',
                'description' => '😈 Squirt Endurance – Harus bertahan dalam sesi squirt selama 15 menit!'
            ],
            [
                'level' => 'ultimate',
                'description' => '😈 Squirt Mastery – Harus bikin pasangan squirt 5 kali dalam 10 menit!'
            ],
            [
                'level' => 'hardcore',
                'description' => '😈 Squirt Domination – Harus dominasi pasangan selama sesi squirt!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Squirt Collection – Harus kumpul semua squirt pasangan dan telan seluruhnya selama 10 menit!'
            ],
            [
                'level' => 'hardcore',
                'description' => '😈 Sensory Overload - Harus pakai blindfold sambil dirangsang pakai ice cube selama 10 menit!'
            ],
            [
                'level' => 'ultimate',
                'description' => '😈 Position Prison - Gak boleh ganti posisi sama sekali selama 25 menit!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Mirror Game - Harus ngikutin gerakan pasangan seperti bayangan cermin!'
            ],
            [
                'level' => 'hard',
                'description' => '😈 Edging Jail - Harus tahan di titik klimaks selama 5 menit tanpa boleh release!'
            ],
            [
                'level' => 'easy',
                'description' => '😈 Kiss Captive - Ciuman french kiss terus menerus selama 5 menit nonstop!'
            ],
            [
                'level' => 'ultimate',
                'description' => '😈 Temperature Torture - Bergantian pakai ice cube dan wax panas selama 15 menit!'
            ],
            [
                'level' => 'hardcore',
                'description' => '😈 Voice Command - Harus langsung nuruin perintah vulgar pasangan dalam 3 detik!'
            ],
            [
                'level' => 'medium',
                'description' => '😈 Reverse Role - Pasangan yang dominasi selama 20 menit penuh!'
            ],
            [
                'level' => 'hard',
                'description' => '😈 Orgasm Denial - Stimulasi penuh tapi dilarang mencapai klimaks sama sekali!'
            ]
        ];

        foreach ($penalties as $penalty) {
            Penalty::firstOrCreate($penalty);
        }
    }
}
