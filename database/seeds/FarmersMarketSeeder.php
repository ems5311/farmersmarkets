<?php

use App\Market;
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

            Market::create([
                'fmid' => intval($data[0]),
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
                'zip' => intval($data[11]),

                'schedule' => $this->buildSchedule(array_slice($data, 12, 8)),

                'xCoordinate' => $data[20],
                'yCoordinate' => $data[21],

                'location' => $data[22],

                'payments' => $this->buildPayments(array_slice($data, 23, 5)),

                'services' => $this->buildServicesList(array_slice($data, 28, 30)),

                'updateTime' => $data[58],
            ]);
        }
    }

    /**
     * Return true for 'Y', false for 'N'
     *
     * @param Char $cell
     * @return bool
     */
    private function yesOrNo($cell)
    {
        return $cell === "Y" ? true : false;
    }

    /**
     * Builds the html for displaying the schedule
     *
     * @param $scheduleData
     * @return void
     */
    private function buildSchedule($scheduleData)
    {
        $schedule = "<ul>";
        $schedExists = false;
        foreach ($scheduleData as $sched) {
            if ($sched) {
                $schedule .= "<li>" . $sched . "</li>";
                $schedExists = true;
            }
        }
        if ($schedExists) {
            return $schedule . "</ul>";
        } else {
            return null;
        }
    }

    /**
     * @param $paymentData
     */
    private function buildPayments($paymentData)
    {
        $paymentTypes = ['credit', 'wic', 'wiccash', 'sfmnp', 'snap'];
        $paymentTypesCount = count($paymentTypes);

        $payments = "<ul class='row'>";
        $pmntExists = false;
        for ($i = 0; $i < $paymentTypesCount; $i++) {
            if ($this->yesOrNo($paymentData[$i])) {
                $pmntExists = true;
                $payments .= "<li class='col-sm-4'>" . $paymentTypes[$i] . "</li>";
            }
        }
        $payments .= "</ul>";

        if ($pmntExists) {
            return $payments;
        } else {
            return null;
        }

    }

    private function buildServicesList($servicesData)
    {
        $servicesTypes = ['organic', 'bakedgoods', 'cheese', 'crafts', 'flowers', 'eggs', 'seafood',
                            'herbs', 'vegetables', 'honey', 'jams', 'maple', 'meat', 'nursery', 'nuts',
                            'plants', 'poultry', 'prepared', 'soap', 'trees', 'wine', 'coffee', 'beans',
                            'fruits', 'grains', 'juices', 'mushrooms', 'pet food', 'tofu', 'wild harvested'];
        $servicesTypesCount = count($servicesTypes);

        $services = "<ul class='row'>";
        $svcExists = false;
        for ($i = 0; $i < $servicesTypesCount; $i++) {
            if ($this->yesOrNo($servicesData[$i])) {
                $svcExists = true;
                $services .= "<li class='col-sm-4'>" . $servicesTypes[$i] . "</li>";
            }
        }
        $services .= "</ul>";

        if ($svcExists) {
            return $services;
        } else {
            return null;
        }

    }
}
