<?php

namespace App\Exports;

use App\Audit;
use Maatwebsite\Excel\Concerns\FromCollection;

class AuditsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Audit::all();
    }
}
