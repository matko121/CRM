<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2023-02-19 20:34:16',
                'updated_at' => '2023-02-19 20:34:16',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2023-02-19 20:34:16',
                'updated_at' => '2023-02-19 20:34:16',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2023-02-19 20:34:16',
                'updated_at' => '2023-02-19 20:34:16',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
