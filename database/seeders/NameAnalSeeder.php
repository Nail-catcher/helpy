<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Imports\NameAnalImport;
use Maatwebsite\Excel\Facades\Excel;
class NameAnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Excel::import(new NameAnalImport(), storage_path('app/public/data/data.xlsx'), null, \Maatwebsite\Excel\Excel::XLSX);


    }
}
