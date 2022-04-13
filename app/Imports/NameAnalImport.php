<?php

namespace App\Imports;

use App\Models\NamingAnalyze;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NameAnalImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new NamingAnalyze([
            'index'=>$row['kod'],
            'name'=>$row['naimenovanie'],
        ]);
    }
}
