<?php

namespace Database\Seeders;

use App\Models\Sampel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySampelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampelData = [
            [
                'nama' => 'Mixagrip',
                'bn' => 'TMXGV50134',
                'jenis' => 'Rutin',
                'tanggal' => '2025-02-01',
            ],
            [
                'nama' => 'Prove vit Multivitamin',
                'bn' => 'VPRIA40999',
                'jenis' => 'Non Rutin',
                'tanggal' => '2025-02-01',
            ],

        ];

        foreach ($sampelData as $key => $val) {
            Sampel::create($val);
        }
    }
}