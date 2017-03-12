<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $guarded = [];

    // TODO have this be done in the CitiesSeeder file
    public function paymentTypes()
    {
        $m_arr = $this->toArray();
        $pmnt = array_slice($m_arr, 24, 5);

        foreach ($pmnt as $key => $val) {
            if (!$val) {
                unset($pmnt[$key]);
            }
        }

        return $pmnt;
    }
}
