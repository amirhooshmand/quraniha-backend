<?php

use Illuminate\Database\Seeder;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents(storage_path("surahs.json")), true);
        foreach ($json as $surah) {
            DB::table('surahs')->insert([
                'id' => $surah["index"],
                'name' => $surah["titleAr"],
                'slug' => $surah["title"],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
