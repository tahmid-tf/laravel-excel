<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;

class EmployeeExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'id',
            'name',
            'email',
            'password'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(User::getEmployees());
    }
}
