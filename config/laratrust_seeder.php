<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superAdministrator' => [
//            'user'                  => 'c,r,u,d',
//            'profile'               => 'c,r,u,d',
//            'team'                  => 'c,r,u,d',
//            'rolesManager'          => 'c,r,u,d',
        ],
        'administrator' => [
//            'user'                 => 'c',
//            'profile'               => 'r,u',
        ],

        'accountant' => [
//            'user'                 => 'c',
//            'profile'               => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
