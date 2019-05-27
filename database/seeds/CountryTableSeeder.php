<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries= [
            47=>'Colombia',
            172=>'Perú',
            237=>'Venezuela',
        ];
        foreach ($countries as $key =>$pais){
            $country = new Country();
            $country->id = $key;
            $country->name = $pais;
            $country->save();
        }
    }
}
