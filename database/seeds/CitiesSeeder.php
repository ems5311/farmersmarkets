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
        $cities = Farmer::getQuery()
            ->whereNotNull('city')
            ->select('city as name', 'state', DB::raw('count(*) as total'))
            ->groupBy('name', 'state');

        $states = Farmer::getQuery()
            ->select('state as name', DB::raw('count(*) as total'))
            ->groupBy('state');

        $citiesResults = array_map(function($object){
            return (array) $object;
        }, $cities->get()->toArray());

        $statesResults = array_map(function($object){
            return (array) $object;
        }, $states->get()->toArray());

        $justStates = array_column( $statesResults, 'name');
        $justStates = array_flip($justStates);

        $countCitiesResults = count($citiesResults);
        for($i = 0; $i < $countCitiesResults; $i++)
        {
            $stateName = $citiesResults[$i]['state'];
            $stateId = $justStates[$stateName];
            $citiesResults[$i]['state_id'] = $stateId + 1;
        }

        DB::table('cities')->insert($citiesResults);
        DB::table('states')->insert($statesResults);
    }
}
