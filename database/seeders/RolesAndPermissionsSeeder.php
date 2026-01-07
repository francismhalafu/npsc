<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // Post permissions
            'view_posts',
            'create_posts',
            'edit_posts',
            'delete_posts',
            'approve_posts',
            'publish_posts',

            // Match permissions
            'view_matches',
            'create_matches',
            'edit_matches',
            'delete_matches',

            // Partner permissions
            'view_partners',
            'create_partners',
            'edit_partners',
            'delete_partners',

            // Page permissions
            'view_pages',
            'create_pages',
            'edit_pages',
            'delete_pages',

            // Contact inquiry permissions
            'view_inquiries',
            'manage_inquiries',

            // Newsletter permissions
            'view_subscribers',
            'manage_subscribers',

            // Category permissions
            'manage_categories',

            // Settings permissions
            'manage_settings',

            // User management
            'view_users',
            'create_users',
            'edit_users',
            'delete_users',
            'assign_roles',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions

        // Super Admin - Full access
        $superAdmin = Role::create(['name' => 'super_admin']);
        $superAdmin->givePermissionTo(Permission::all());

        // Approver - Can view, create, edit, approve, and publish posts
        $approver = Role::create(['name' => 'approver']);
        $approver->givePermissionTo([
            'view_posts',
            'create_posts',
            'edit_posts',
            'approve_posts',
            'publish_posts',
            'view_matches',
            'create_matches',
            'edit_matches',
            'view_partners',
            'view_pages',
            'view_inquiries',
            'manage_inquiries',
            'view_subscribers',
        ]);

        // Creator - Can only create and edit draft posts (not approve/publish)
        $creator = Role::create(['name' => 'creator']);
        $creator->givePermissionTo([
            'view_posts',
            'create_posts',
            'edit_posts', // Can only edit own posts (enforced in Filament Resource)
            'view_matches',
            'view_partners',
            'view_pages',
            'view_inquiries',
        ]);

        $this->command->info('✅ Roles and permissions created successfully!');
        $this->command->info('   - Super Admin: Full access');
        $this->command->info('   - Approver: Can approve & publish posts');
        $this->command->info('   - Creator: Can create draft posts only');
    }
}
