<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Traits\Database\Seeder\SeederHelperTrait;

class CurrenciesSeeder extends Seeder
{

    use SeederHelperTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->preventSeedingIfDataExists('currencies', $this->getData());
    
    }

    private function getData(){
        return [
            [
                'symbol' => 'USD',
                'name' => 'United States Dollar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'symbol' => 'EUR',
                'name' => 'Euro',
                'created_at' => now(), 
                'updated_at' => now()
            ]
        ] ;
    }

}
