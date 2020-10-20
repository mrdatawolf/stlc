<?php namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Orders;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class OrdersDatatables extends LivewireDatatable
{
    public $model = Orders::class;

    /**
     * @return array|mixed
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                        ->label('ID')
                        ->sortBy('id'),

            Column::name('name')
                  ->label('Name'),

            Column::name('released'),
            Column::name('need_re'),
            Column::name('order_number')->label('Order#'),
            Column::name('po_number')->label('PO#'),
            Column::name('quantity'),
            Column::name('thick'),
            Column::name('width'),
            Column::name('length'),
            Column::name('grade'),
            Column::name('mill'),
            Column::name('frt'),
            Column::name('total'),

            DateColumn::name('created_at')
                      ->label('Creation Date'),
            DateColumn::name('updated_at')
                      ->label('Updated Date')
        ];
    }
}
