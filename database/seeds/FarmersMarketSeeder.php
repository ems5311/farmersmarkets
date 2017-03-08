<?php

use App\Farmer;
use Illuminate\Database\Seeder;

class FarmersMarketSeeder extends Seeder
{
    /**
     * Run the $database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(storage_path('app/farmers_justdata.csv'), 'r');

        while (($data = fgetcsv($file, 0, ",")) !== FALSE) {

            $data = array_map('trim', $data);

            $data = array_map(function ($v) {
                return ("" === $v) ? null : $v;
            }, $data);

            Farmer::create([
                'id' => intval($data[0]),
                'marketName' => $data[1],
                'website' => $data[2],
                'facebook' => $data[3],
                'twitter' => $data[4],
                'youtube' => $data[5],
                'otherMedia' => $data[6],

                'street' => $data[7],
                'city' => $data[8],
                'county' => $data[9],
                'state' => $data[10],
                'zip' => $data[11],

                'season1Date' => $data[12],
                'season1Time' => $data[13],
                'season2Date' => $data[14],
                'season2Time' => $data[15],
                'season3Date' => $data[16],
                'season3Time' => $data[17],
                'season4Date' => $data[18],
                'season4Time' => $data[19],

                'xCoordinate' => $data[20],
                'yCoordinate' => $data[21],

                'location' => $data[22],

                'credit' => $this->yesOrNo($data[23]),
                'wic' => $this->yesOrNo($data[24]),
                'wiccash' => $this->yesOrNo($data[25]),
                'sfmnp' => $this->yesOrNo($data[26]),
                'snap' => $this->yesOrNo($data[27]),
                'organic' => $this->yesOrNo($data[28]),
                'bakedgoods' => $this->yesOrNo($data[29]),
                'cheese' => $this->yesOrNo($data[30]),
                'crafts' => $this->yesOrNo($data[31]),
                'flowers' => $this->yesOrNo($data[32]),
                'eggs' => $this->yesOrNo($data[33]),
                'seafood' => $this->yesOrNo($data[34]),
                'herbs' => $this->yesOrNo($data[35]),
                'vegetables' => $this->yesOrNo($data[36]),
                'honey' => $this->yesOrNo($data[37]),
                'jams' => $this->yesOrNo($data[38]),
                'maple' => $this->yesOrNo($data[39]),
                'meat' => $this->yesOrNo($data[40]),
                'nursery' => $this->yesOrNo($data[41]),
                'nuts' => $this->yesOrNo($data[42]),
                'plants' => $this->yesOrNo($data[43]),
                'poultry' => $this->yesOrNo($data[44]),
                'prepared' => $this->yesOrNo($data[45]),
                'soap' => $this->yesOrNo($data[46]),
                'trees' => $this->yesOrNo($data[47]),
                'wine' => $this->yesOrNo($data[48]),
                'coffee' => $this->yesOrNo($data[49]),
                'beans' => $this->yesOrNo($data[50]),
                'fruits' => $this->yesOrNo($data[51]),
                'grains' => $this->yesOrNo($data[52]),
                'juices' => $this->yesOrNo($data[53]),
                'mushrooms' => $this->yesOrNo($data[54]),
                'petfood' => $this->yesOrNo($data[55]),
                'tofu' => $this->yesOrNo($data[56]),
                'wildharvested' => $this->yesOrNo($data[57]),

                'updateTime' => $data[58],
            ]);
        }
    }

    private function yesOrNo($cell)
    {
        return $cell === "Y" ? true : false;
    }
}
