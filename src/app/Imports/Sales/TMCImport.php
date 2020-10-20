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
            'origin_city' => $row[1],
            'origin_county' => $row[2],
            'origin_zip_code' => $row[3],
            'destination_state' => $row[4],
            'destination_city' => $row[5],
            'proposed_rate_mile_flatbed' => $row[6],
            'minimum' => $row[7],
            'FSC_7_18' => $row[8],
            'six_thirteen' => $row[9],
            'meet_minimum' => $row[10],
            'miles' => $row[11],
            'dollar_value' => $row[12],
            'cost_no_tarp' => $row[13],
            'cost_tarped' => $row[14],
            'per_m' => $row[15],
        ]);
    }
}
