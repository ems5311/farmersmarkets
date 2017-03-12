<?php

use App\Market;
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
        $states = Market::getQuery()
            ->select('state as name', DB::raw('count(*) as total'))
            ->groupBy('name')
            ->get();

        $amResult = array_map(function($object){
            return (array) $object;
        }, $states->toArray());

        DB::table('states')->insert($amResult);
    }
}
