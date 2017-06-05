<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as FakerFactory;
use App\User;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin {email?} {password?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Admin User';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $faker = FakerFactory::create();

        $email = $this->argument('email') ?: $faker->email;
        $plainPassword = $this->argument('password') ?: $faker->password;
        $password = bcrypt($plainPassword);
        $name = $faker->name;

        $existedAdminUser = User::where('email', $email)->first();

        if (empty($existedAdminUser)) {
            $adminUser = new User();
            $adminUser->fill(compact('email', 'password', 'name'));

            if ($adminUser->save()) {
                $this->info('New Admin added successfully!!!');
                $this->info('Email: ' . $email);
                $this->info('Password: ' . $plainPassword);
                $this->info('Name: ' . $name);
            }
        } else {
            $this->warn('Email existed!');
        }
    }
}
