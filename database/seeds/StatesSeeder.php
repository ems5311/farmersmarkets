<?php

use App\Farmer;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = Farmer::getQuery()
            ->select('state as name', DB::raw('count(*) as total'))
            ->groupBy('name')
            ->get();

        $amResult = array_map(function($object){
            return (array) $object;
        }, $states->toArray());


//        dd($amResult);
        DB::table('states')->insert($amResult);
    }
}
