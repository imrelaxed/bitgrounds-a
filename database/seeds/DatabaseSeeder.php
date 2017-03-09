<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsersTableSeeder::class);
    }
}
/**
 * Prepare a User Database Seed
 */
class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $userData = [
            'name' =>	'John Doe',
            'email' => 'foo@bar.com',
            'password' => Hash::make('secret')
        ];
        User::create($userData);
    }
}