<?php

use App\Farmer;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states = Farmer::getQuery()
            ->whereNotNull('city')
            ->select('city as name', DB::raw('count(*) as total'))
            ->groupBy('name')
            ->get();

        $amResult = array_map(function($object){
            return (array) $object;
        }, $states->toArray());

        DB::table('cities')->insert($amResult);
    }
}
