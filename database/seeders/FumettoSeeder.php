<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fumetti;
class FumettoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_fumetto = config('fumetto');
        
        foreach($array_fumetto as $fumetto_item){
            $nuovo_fumetto = new Fumetti();
            $nuovo_fumetto->title = $fumetto_item['title'];
            $nuovo_fumetto->description = $fumetto_item['description'];
            $nuovo_fumetto->thumb = $fumetto_item['thumb'];
            $nuovo_fumetto->price = $fumetto_item['price'];
            $nuovo_fumetto->series = $fumetto_item['series'];
            $nuovo_fumetto->sale_date = $fumetto_item['sale_date'];
            $nuovo_fumetto->type = $fumetto_item['type'];
            $nuovo_fumetto->save();
        }
    }
}
