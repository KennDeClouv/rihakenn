<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reward;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rewards = [
            [
                'level' => 'easy',
                'description' => '💦 Squirt Shower – Langsung diberkati dari atas tanpa batasan!'
            ],
            [
                'level' => 'medium',
                'description' => '💦 Overflow Reward – Rewardnya harus sampe pasangan keluar berkali-kali!'
            ],
            [
                'level' => 'hard',
                'description' => '💦 Drenched Bliss – Harus dinikmati tanpa boleh dilap atau dihapus!'
            ],
            [
                'level' => 'ultimate',
                'description' => '💦 Direct Blessing – Langsung dapet squirt di tempat yang dipilih sendiri!'
            ],
            [
                'level' => 'hardcore',
                'description' => '💦 Exclusive Hydration – Reward khusus & full tanpa gangguan!'
            ],
            [
                'level' => 'easy',
                'description' => '💦 Squirt Marathon – Gak boleh stop sampe pasangan kehabisan tenaga!'
            ],
            [
                'level' => 'medium',
                'description' => '💦 Golden Prize – Dapet privilege buat nentuin sesi khusus sendiri!'
            ],
            [
                'level' => 'hard',
                'description' => '💦 Hydration Lock – Gak boleh selesai sampe dapet minimal dua kali!'
            ],
            [
                'level' => 'ultimate',
                'description' => '💦 Bonus Round – Setiap reward dapet tambahan sesi lagi!'
            ],
            [
                'level' => 'hardcore',
                'description' => '💦 Squirt Reset – Abis dapet reward ini, langsung mulai sesi baru tanpa jeda!'
            ],
            [
                'level' => 'easy',
                'description' => '💦 Face Fountain - Squirt wajib kena muka langsung tanpa bisa menghindar!'
            ],
            [
                'level' => 'medium',
                'description' => '💦 Double Downpour - Harus terima squirt berturut-turut di dua area berbeda!'
            ],
            [
                'level' => 'hard',
                'description' => '💦 Target Practice - Squirt harus tepat mengenai target yang ditentukan!'
            ],
            [
                'level' => 'ultimate',
                'description' => '💦 Eternal Spring - Squirt terus menerus selama 5 menit nonstop!'
            ],
            [
                'level' => 'hardcore',
                'description' => '💦 Squirt Roulette - Pasangan bebas squirt kapan saja dan dimana saja!'
            ],
            [
                'level' => 'easy',
                'description' => '💦 Morning Dew - Squirt wajib dikonsumsi langsung seperti air mineral!'
            ],
            [
                'level' => 'medium',
                'description' => '💦 Hydration Station - Pilih lokasi tubuh mana yang mau dibasahi!'
            ],
            [
                'level' => 'hard',
                'description' => '💦 Flash Flood - Squirt kejutan tanpa peringatan selama sesi!'
            ],
            [
                'level' => 'ultimate',
                'description' => '💦 Golden Shower Deluxe - Squirt premium dengan bonus pijat intim!'
            ],
            [
                'level' => 'hardcore',
                'description' => '💦 Tsunami Protocol - Squirt berantai langsung lanjut sesi kedua!'
            ],
        ];

        foreach ($rewards as $reward) {
            Reward::firstOrCreate($reward);
        }
    }
}
