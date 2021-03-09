<?php

use Illuminate\Database\Seeder;
use App\User;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($x = 0; $x < 30; $x++) {
            $gender = $faker->randomElement($array = ['male', 'female']);

            $role = $faker->randomElement([User::CLIENT_ROLE, User::SPECIAL_CLIENT_ROLE, User::AGENT_ROLE, User::ADMIN_ROLE]);

            $firstName = $faker->firstName($gender);
            $lastName = $faker->lastName;

            $user = User::create([
                'email' => $faker->safeEmail,
                'name' => trim($firstName . ' ' . $lastName),
                'role' => $role,
                'password' => Hash::make('rootroot')
            ]);
        }
    }
}
