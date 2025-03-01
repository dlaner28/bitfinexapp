<?php

namespace App\Traits\Database\Seeder;

use Illuminate\Support\Facades\DB;

trait SeederHelperTrait
{
    /**
     * Prevent seeding if the table already has data.
     *
     * @param string $tableName
     * @param array $data
     * @return void
     */
    public function preventSeedingIfDataExists(string $tableName, array $data)
    {
        // Check if the table already contains data
        if (DB::table($tableName)->count() > 0) {
            return;  // Skip seeding if data already exists
        }

        // Insert the data only if the table is empty
        if (!empty($data)) {
            DB::table($tableName)->insert($data);
        }
    }
}
