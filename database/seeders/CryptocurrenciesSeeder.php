<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Traits\Database\Seeder\SeederHelperTrait;

class CryptocurrenciesSeeder extends Seeder
{

    use SeederHelperTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $this->preventSeedingIfDataExists('cryptocurrencies', $this->getData());


    }

    private function getData(){
        return [
            [
                'symbol' => 'BTC',
                'name' => 'Bitcoin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'symbol' => 'ETH',
                'name' => 'Ethereum',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ] ;
    }

}
