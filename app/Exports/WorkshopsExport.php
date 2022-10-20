<?php

namespace App\Exports;

use App\Models\Workshop;
use Maatwebsite\Excel\Concerns\FromCollection;

class WorkshopsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Workshop::all();
    }
}
