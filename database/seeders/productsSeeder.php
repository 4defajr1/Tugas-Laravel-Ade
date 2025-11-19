<?php

namespace Database\Seeders;

use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::factory(10)->create();
        // User::factory(10)->create();
        // DB::table('products')->insert([
        //     [
        //         'nama'=> 'Spanduk',
        //         'prince'=> 35,
        //         'description'=> 'permeter'
        //     ]
        //     ]);
    }
}
