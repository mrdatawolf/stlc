<?php namespace App\Imports\Sales;

use App\Models\GrayFrt;
use Maatwebsite\Excel\Concerns\ToModel;

class GrayFrtImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \App\Models\GrayFrt|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
     */
    public function model(array $row)
    {
        return new GrayFrt([
            'town' => $row[0],
            'miles' => $row[1],
            'rate' => $row[2],
            'value' => $row[3]
        ]);
    }
}
