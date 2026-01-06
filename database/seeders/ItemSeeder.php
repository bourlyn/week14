<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
public function run(): void
    {
        $items = [
            [
                'name' => 'Mikroskop',
                'stock' => 5,
                'description' => 'Mikroskop digital untuk penelitian mikrobiologi',
                'category_id' => 2
            ],
            
            [
                'name' => 'Beaker Glass 250ml',
                'stock' => 10,
                'description' => 'Gelas ukur untuk percobaan kimia',
                'category_id' => 1
            ],
            [
                'name' => 'Laptop Dell',
                'stock' => 3,
                'description' => 'Laptop untuk praktikum pemrograman',
                'category_id' => 3
            ],
            [
                'name' => 'Proyektor',
                'stock' => 1,
                'description' => 'Proyektor untuk presentasi',
                'category_id' => 4
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }       
    }
}
