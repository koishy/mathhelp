<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Площадь квадрата',
            'content' => 'Формула: <code>ab</code><br>',
            'values' => 2,
            'formula' => 'values[0]*values[1]'
        ]);

        DB::table('articles')->insert([
            'title' => 'Площадь круга',
            'content' => 'Формула: <code>π r<sup>2</sup></code><br> Число 1 - радиус',
            'values' => 1,
            'formula' => 'Math.PI*(values[0]*values[0])'
        ]);

        DB::table('articles')->insert([
            'title' => 'Площадь треугольника',
            'content' => 'Формула: <code>bh/2</code><br> где b это длина основы а h это высота треугольника<br> Число 1 - основание <br> Число 2 - высота',
            'values' => 2,
            'formula' => 'values[0]*values[1]/2'
        ]);
    }
}
