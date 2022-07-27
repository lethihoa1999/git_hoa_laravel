<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categories::factory()->create([
            'id' => '1',
            'name' => 'Le Thi Hoa',
            'description' => 'hoc lap trinh',
        ]);
    }
}
