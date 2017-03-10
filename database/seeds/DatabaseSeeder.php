<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ApplicationSetting;

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
        $this->call(ApplicationSettingsTableSeeder::class);
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
            'password' => bcrypt('secret')
        ];
        User::create($userData);
    }
}

/**
 * Prepare an Application Settings Database Seed
 */
class ApplicationSettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('application_settings')->delete();
        $data = [
            'name' =>	'Bitgrounds',
            'customer_support_email' => 'support@bitgrounds.com'
        ];
        ApplicationSetting::create($data);
    }
}