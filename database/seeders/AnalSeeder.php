<?php

namespace Database\Seeders;

use App\Models\Analyze;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=8999; $i<9500; $i++){
        Analyze::create([
            'name'=>'Test ',
            'inz'=>$i,
            'date'=>Carbon::now()->format('Y-m-d'),
            'user_id'=>1,
            'url'=>'/hehe/nothehe.pdf'
        ]);
        }
    }
}
