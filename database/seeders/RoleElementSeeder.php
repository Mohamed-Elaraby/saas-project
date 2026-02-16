<?php

namespace Database\Seeders;

use App\Models\RoleElement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elements = [
            'user',
            'profile',
            'rolesManager',
            'setting',
            'client',
            'clientPayment',
            'clientCollecting',
            'supplier',
            'supplierPayment',
            'supplierCollecting',
            'branch',
            'expenses',
            'expensesType',
            'statement',
            'category',
            'subCategory',
            'product',
            'productCode',
            'internalTransfer',
            'purchaseOrder',
            'purchaseOrderReturn',
        ];
        foreach ($elements as $element)
        {
            RoleElement::create([
                'name' => $element
            ]);
        }

    }
}
