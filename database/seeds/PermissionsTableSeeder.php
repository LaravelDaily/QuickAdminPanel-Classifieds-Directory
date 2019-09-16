<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '17',
                'title'      => 'city_create',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '18',
                'title'      => 'city_edit',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '19',
                'title'      => 'city_show',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '20',
                'title'      => 'city_delete',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '21',
                'title'      => 'city_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '22',
                'title'      => 'category_create',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '23',
                'title'      => 'category_edit',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '24',
                'title'      => 'category_show',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '25',
                'title'      => 'category_delete',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '26',
                'title'      => 'category_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '27',
                'title'      => 'company_create',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '28',
                'title'      => 'company_edit',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '29',
                'title'      => 'company_show',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '30',
                'title'      => 'company_delete',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
            [
                'id'         => '31',
                'title'      => 'company_access',
                'created_at' => '2019-09-16 07:56:46',
                'updated_at' => '2019-09-16 07:56:46',
            ],
        ];

        Permission::insert($permissions);
    }
}
