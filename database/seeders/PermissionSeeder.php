<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $permissions_list = [
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


        $crud = ['create', 'read', 'update', 'delete'];
        foreach ($permissions_list as $permission)
        {
            foreach ($crud as $item)
            {
                Permission::create([
                    'name' => $item.'-'.$permission,
                    'display_name' => $this -> split_word($item.' '.$permission),
                    'description' => $this -> split_word($item.' '.$permission),
                ]);
            }

        }

    }

    public function split_word($value)
    {
        $replace_dash = str_replace('-', ' ', $value);
        $string = ucwords($replace_dash);
        return $string ;
    }
}
