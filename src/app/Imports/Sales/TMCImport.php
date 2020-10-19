<?php namespace App\Imports\Sales;

use App\Models\TMC;
use Maatwebsite\Excel\Concerns\ToModel;

class TMCImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \App\Models\TMC|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
     */
    public function model(array $row)
    {
        return new TMC([
            'origin_state' => $row[0],
            'city' => $row[1],
            'destination_state' => $row[2],
            'destination_city' => $row[3],
            'proposed_rate_mile_flatbed' => $row[4],
            'FSC_7_18' => $row[5],
            'six_thirteen' => $row[6],
            'meet_minimum' => $row[7],
            'miles' => $row[8],
            'dollar_value' => $row[9],
            'cost_no_tarp' => $row[10],
            'cost_tarped' => $row[11],
            'per_m' => $row[12],
        ]);
    }
}
