<?php namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TMC;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TmcDatatables extends LivewireDatatable
{
    public $model = TMC::class;

    /**
     * @return array|mixed
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                        ->label('ID')
                        ->sortBy('id'),

            Column::name('origin_state')
                  ->label('Origin State'),

            Column::name('origin_city'),
            Column::name('origin_county'),
            Column::name('origin_zip_code'),
            Column::name('destination_state'),
            Column::name('destination_city'),
            Column::name('proposed_rate_mile_flatbed'),
            Column::name('fsc_7_18'),
            Column::name('six_thirteen'),
            Column::name('meet_minimum'),
            Column::name('miles'),
            Column::name('dollar_value'),
            Column::name('cost_no_tarp'),
            Column::name('cost_tarped'),
            Column::name('per_m'),

            DateColumn::name('created_at')
                      ->label('Creation Date'),
            DateColumn::name('updated_at')
                      ->label('Updated Date')
        ];
    }
}
