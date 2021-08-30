<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;

class UserController extends Controller
{
    public function exportIntoExcel(){
        return Excel::download(new EmployeeExport(),'employee.xlsx');
    }

    public function exportIntoCsv(){
        return Excel::download(new EmployeeExport(),'employee.csv');

    }
}
