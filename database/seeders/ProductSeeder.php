<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
                ->count(12)

                ->sequence(
                    [
                        'category_id' => '1',
                        'picture' => '/images/hommes/0706301811_1_1_1.jpg'
                    ],
                    [
                        'category_id' => '1',
                        'picture' => '/images/hommes/3918402401_1_1_1.jpg'
                    ],
                    [
                        'category_id' => '1',
                        'picture' => '/images/hommes/4314509658_1_1_1.jpg'
                    ],
                    [
                        'category_id' => '1',
                        'picture' => '/images/hommes/9065437707_2_1_1.jpg'
                    ],
                    [
                        'category_id' => '1',
                        'picture' => '/images/hommes/3918420710_1_1_1.jpg'
                    ],
                    [
                        'category_id' => '1',
                        'picture' => '/images/hommes/3859401732_1_1_1.jpg'
                    ],
                    [
                        'category_id' => '2',
                        'picture' => '/images/femmes/wxl-_fideler_antic_blue5.jpg'
                    ],
                    [
                        'category_id' => '2',
                        'picture' => '/images/femmes/wxl-_New_Coleen-006.jpg'
                    ],
                    [
                        'category_id' => '2',
                        'picture' => '/images/femmes/Wxl-_19PE_juin18_3490.jpg'
                    ],
                    [
                        'category_id' => '2',
                        'picture' => '/images/femmes/wxl-_Carpentie-011.jpg'
                    ],
                    [
                        'category_id' => '2',
                        'picture' => '/images/femmes/wxl-stella-guerande-02.jpg'
                    ],
                    [
                        'category_id' => '2',
                        'picture' => '/images/femmes/Wxl-_Port_Jackson-031.jpg'
                    ],
                )
                ->create();
    }
}

// ->state(new Sequence(
//     function (Sequence $sequence) { return ['category_id' => Category::all()->random()]; },
// ))
