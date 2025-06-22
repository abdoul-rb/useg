<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUser extends Command
{
    protected $signature = 'create:user {--email=} {--password=}';

    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->option('email');
        $password = $this->option('password');

        $firstname = null;
        $lastname = null;

        if (! $email) {
            $email = $this->ask('What is your Email?');
        }

        if (! $password) {
            $password = $this->secret('Enter your password');
        }

        if (! $firstname) {
            $firstname = $this->ask('Enter your firstname');
        }

        if (! $lastname) {
            $lastname = $this->ask('Enter your lastname');
        }

        $user = User::query()->where('email', $email)->first();

        if (! $user) {
            $user = User::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => bcrypt($password),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $user->markEmailAsVerified();

        // event(new Registered($user));
    }
}
