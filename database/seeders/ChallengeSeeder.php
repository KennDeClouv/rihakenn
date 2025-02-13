<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Challenge;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $challenges = [
            [
                'level' => 'easy',
                'title' => 'HYDRATION LIMIT',
                'description' => '🎯 Harus bikin pasangan squirt minimal 3 kali dalam waktu 10 menit.'
            ],
            [
                'level' => 'medium',
                'title' => 'TSUNAMI SURVIVOR',
                'description' => '🎯 Harus bikin pasangan squirt 2 kali dan minum sebagian.'
            ],
            [
                'level' => 'hard',
                'title' => 'ENDURANCE FLOOD',
                'description' => '🎯 Harus bertahan tanpa istirahat selama 15 menit nonstop hs.'
            ],
            [
                'level' => 'ultimate',
                'title' => 'HYDRATION LIMIT BREAK',
                'description' => '🎯 Harus bikin pasangan squirt minimal 9 kali dalam waktu 10 menit.'
            ],
            [
                'level' => 'hardcore',
                'title' => 'Warm-Up Wave',
                'description' => '🎯 Harus bikin pasangan squirt sekali dalam 5 menit dan minum semuanya ngga bolee ada yang netes.'
            ],
            [
                'level' => 'hardcore',
                'title' => 'ENDLESS STORM',
                'description' => '🎯 Harus bertahan tanpa istirahat selama 20 menit nonstop.'
            ],
            [
                'level' => 'hardcore',
                'title' => 'NO ESCAPE TSUNAMI',
                'description' => '🎯 Harus bertahan sampe pasangan kehabisan tenaga total.'
            ],
            [
                'level' => 'hard',
                'title' => 'SQUIRT INITIATION',
                'description' => '🎯 Bikin pasangan squirt dalam 3 menit pertama',
            ],
            [
                'level' => 'hard',
                'title' => 'UNSTOPPABLE FLOOD',
                'description' => '🎯 Harus bikin pasangan squirt 4 kali dalam 7 menit',
            ],
            [
                'level' => 'ultimate',
                'title' => 'HYDRATION PRISON',
                'description' => '🎯 Harus bertahan tanpa henti selama 20 menit',
            ],
            [
                'level' => 'hardcore',
                'title' => 'EXTREME TSUNAMI',
                'description' => '🎯 Harus bikin pasangan squirt berturut-turut tanpa jeda lebih dari 10 detik',
            ],
            [
                'level' => 'hardcore',
                'title' => 'APOCALYPSE MODE',
                'description' => '🎯 Harus bertahan sampe pasangan KO total & udah gak bisa lanjut',
            ],
            [
                'level' => 'easy',
                'title' => 'MISSIONARY BEGIN',
                'description' => '🎯 Selesaikan sesi 5 menit dalam posisi missionary.'
            ],
            [
                'level' => 'medium',
                'title' => 'MISSIONARY INTERMEDIATE',
                'description' => '🎯 Selesaikan sesi 10 menit dalam posisi missionary dengan variasi kecepatan.'
            ],
            [
                'level' => 'hard',
                'title' => 'MISSIONARY EXPERT',
                'description' => '🎯 Selesaikan sesi 15 menit dalam posisi missionary tanpa mengubah posisi.'
            ],
            [
                'level' => 'ultimate',
                'title' => 'SQUIRT MASTERY',
                'description' => '🎯 Bikin pasangan squirt 3 kali dan minum semuanya, harus kena muka dan badan.',
            ],
            [
                'level' => 'medium',
                'title' => 'ANAL LICKER',
                'description' => '🎯 Jilat anal pasangan terus menerus dalam waktu 3 menit.',
            ],
            [
                'level' => 'hard',
                'title' => 'ANAL LOVER',
                'description' => '🎯 Jilat anal pasangan terus menerus dalam waktu 5 menit.',
            ],
            [
                'level' => 'hardcore',
                'title' => 'ANAL ADDICT',
                'description' => '🎯 Jilat anal pasangan terus menerus dalam waktu 10 menit.',
            ],
            [
                'level' => 'hardcore',
                'title' => 'PUSSY ADDICT',
                'description' => '🎯 Jilat mimiw pasangan selama 15 menit tanpa henti apapun yang terjadi.',
            ],
            [
                'level' => 'easy',
                'title' => 'KISS MARATHON',
                'description' => '🎯 Berciuman selama 5 menit tanpa berhenti.',
            ],
            [
                'level' => 'medium',
                'title' => 'SENSUAL MASSAGE',
                'description' => '🎯 Berikan pijatan sensual selama 10 menit.',
            ],
            [
                'level' => 'hard',
                'title' => 'BLINDFOLD ADVENTURE',
                'description' => '🎯 Lakukan sesi bercinta dengan mata tertutup selama 15 menit.',
            ],
            [
                'level' => 'ultimate',
                'title' => 'MULTIPLE ORGASM',
                'description' => '🎯 Capai orgasme sebanyak 3 kali dalam satu sesi.',
            ],
            [
                'level' => 'easy',
                'title' => 'CUDDLE TIME',
                'description' => '🎯 Berpelukan dan berbicara dari hati ke hati selama 10 menit.',
            ],
            [
                'level' => 'medium',
                'title' => 'ROLE PLAY',
                'description' => '🎯 Lakukan role play sesuai dengan skenario yang disepakati selama 15 menit.',
            ],
            [
                'level' => 'hard',
                'title' => 'ICE CUBE TEASE',
                'description' => '🎯 Gunakan es batu untuk merangsang pasangan selama 10 menit.',
            ],
            [
                'level' => 'ultimate',
                'title' => 'TANTRA SESSION',
                'description' => '🎯 Lakukan sesi tantra selama 30 menit tanpa ejakulasi.',
            ],
            [
                'level' => 'hardcore',
                'title' => 'EDGE OF DESIRE',
                'description' => '🎯 Lakukan edging selama 20 menit tanpa mencapai klimaks.',
            ],
            [
                'level' => 'hardcore',
                'title' => 'DOMINANCE PLAY',
                'description' => '🎯 Dominasi pasanganmu sepenuhnya selama 30 menit.',
            ],
            [
                'level' => 'hardcore',
                'title' => 'SENSORY DEPRIVATION',
                'description' => '🎯 Tutup mata dan telinga pasanganmu, lalu rangsang mereka selama 20 menit.',
            ],
            [
                'level' => 'hardcore',
                'title' => 'MULTIPLE POSITIONS',
                'description' => '🎯 Ganti posisi bercinta setiap 2 menit selama 20 menit.',
            ],
        ];

        foreach ($challenges as $challenge) {
            Challenge::firstOrCreate($challenge);
        }
    }
}
