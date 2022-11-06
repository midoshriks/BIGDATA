<?php

namespace Database\Seeders;

use App\Models\compane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companes = [
            '1' => 'تموين',
            '2' => 'جملة',
            '3' => 'ماركت',
            '4' => 'علف وعطارة',
        ];
        foreach ($companes as $key => $value) {
            # code...
            $compane = compane::create([
                'name' => $value,
            ]);
        }
    }
}
