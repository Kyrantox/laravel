<?php

use App\Skill;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'name' => 'Admin',

        ],
            [
                'name' => 'Utilisateur',
            ]);
        App\Role::insert($data);
    }
}
