<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Quantsize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class QuantsizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quantsize::factory()
                ->count(20)
                ->state(new Sequence(
                    function (Sequence $sequence) { return ['prod_id' => Product::all()->random()]; },
                ))
                ->create();
    }
}
