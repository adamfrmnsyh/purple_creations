<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KatalogSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('seeders/katalog.json');

        // Jika file backup tidak ada, jangan error
        if (!file_exists($file)) {
            return;
        }

        $data = json_decode(file_get_contents($file), true);

        // Masukkan data ke tabel katalog
        DB::table('katalogs')->insert($data);
    }
}
