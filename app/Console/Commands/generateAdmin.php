<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class generateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating admin user for accessing in admin panel';

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
     * @return int
     */
    public function handle()
    {

        $usersSeed = new DatabaseSeeder();
        $usersSeed->run();

        $adminRoleId = Role::where('role', 'admin')->first();
        $password = 'password';
        $user = User::updateOrCreate(
            [
                'email' => 'admin@mail.com',
            ],
            [
                'name' => 'Admin',
                'role_id' => $adminRoleId->id,
                'email_verified_at' => now(),
                'password' => Hash::make($password),

            ],
        );
        $this->info(sprintf("Admin created with\n\temail: %s \n\tpassword: %s", $user->email, $password));

        return Command::SUCCESS;
    }
}
