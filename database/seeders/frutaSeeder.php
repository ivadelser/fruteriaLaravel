<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Fruta;

class frutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<5;$i++){
            $faker = Faker::create();
            $fruta = new Fruta();
            $fruta->nombre = $faker->randomElement(['Manzana', 'Plátano', 'Naranja', 'Mandarina', 'Fresa']);
            $fruta->temporada = $faker->randomElement(['Primavera', 'Verano', 'Otoño', 'Invierno']);
            $fruta->precio = $faker->randomFloat(2, 0.50, 3);
            $fruta->stock = $faker->numberBetween(75, 250);
            $fruta->created_at= date('Y-m-d H:m:s');
            $fruta->updated_at = date('Y-m-d H:m:s');
            $fruta->save();
        }
    }
}
