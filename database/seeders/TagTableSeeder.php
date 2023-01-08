<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ["家事", "仕事", "勉強", "趣味", "その他"];
        foreach ($names as $name) {
            \App\Models\Tag::create([
                'name' => $name,
            ]);
        }
    }
}
