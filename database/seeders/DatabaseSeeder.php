<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            CategorySeeder::class,
        ]);

        $this->command->info('');
        $this->command->info('🎉 Database seeding completed!');
        $this->command->info('');
        $this->command->info('Next steps:');
        $this->command->info('1. Assign super_admin role to your user:');
        $this->command->info('   php artisan tinker');
        $this->command->info('   >>> $user = User::where(\'email\', \'francismhalafu@gmail.com\')->first();');
        $this->command->info('   >>> $user->assignRole(\'super_admin\');');
        $this->command->info('');
        $this->command->info('2. Visit http://npsc.test/admin to access the admin panel');
    }
}
