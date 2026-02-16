<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branch_list = ['branch 1', 'branch 2', 'branch 3', 'branch 4'];
        foreach ($branch_list as $branch)
        {
            Branch::create([
                'name' => $branch,
                'display_name' => $branch,
                'phone' => '123456789',

            ]);
        }
    }
}
