<?php

use App\Skill;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(SkillsTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        $roles = App\Role::all();
        $skills = App\Skill::all();



        factory(App\User::class, 50)->create()->each(function($u) use ($skills, $roles) {
            $skillSet = $skills->random((rand(1,4)));
            foreach($skillSet as $skill ) {
                $u->skills()->attach($skill->id, ['level' => rand(1,5)]);
            }
            $roleSet = $roles->random((rand(1,2)));
            foreach($roleSet as $role ) {
                $u->roles()->attach($role->id);
            }
        });

    }
}
