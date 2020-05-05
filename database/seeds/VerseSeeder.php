<?php

use Illuminate\Database\Seeder;

class VerseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents(storage_path("ayah.json")), true);
        $count = 1;
        foreach ($json as $ayah) {
            DB::table('verses')->insert([
                'id' => $count,
                'surah_id' => $ayah["SuraID"],
                'verse_number' => $ayah["VerseID"],
                'text' => $ayah["AyahText"],
                'created_at' => now(),
                'updated_at' => now()
            ]);

            $count++;
        }
    }
}
