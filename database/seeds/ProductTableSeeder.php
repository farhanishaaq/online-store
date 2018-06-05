<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([

            'image_path' => 'images/diary.jpg',
            'title' => 'Home Work Diary',
            'description' => 'It is a Home Work Diary at cheep rate, It have 30 Pages',
            'Price' => 25

        ]);
        $product->save();
        $product = new \App\Product([

            'image_path' => 'images/diary.jpg',
            'title' => 'Home Work Diary',
            'description' => 'It is a Home Work Diary at cheep rate, It have 60 Pages',
            'Price' => 40

        ]);
        $product->save();
        $product = new \App\Product([

            'image_path' => 'images/diary.jpg',
            'title' => 'Home Work Diary',
            'description' => 'It is a Home Work Diary at cheep rate, It have 30 Pages',
            'Price' => 30

        ]);
        $product->save();
    }
}
