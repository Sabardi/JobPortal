<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Membuat Permission
        Permission::create(['name' => 'create_job']);
        Permission::create(['name' => 'edit_job']);
        Permission::create(['name' => 'verify_job']);
        Permission::create(['name' => 'delete_job']);
        Permission::create(['name' => 'apply_for_job']);
        
        // Membuat Role
        $admin = Role::create(['name' => 'admin']);
        $company = Role::create(['name' => 'company']);
        $jobSeeker = Role::create(['name' => 'job_seeker']);
        
        // Memberikan Permission ke Role
        $admin->givePermissionTo(['create_job', 'edit_job', 'verify_job', 'delete_job']);
        $company->givePermissionTo(['create_job', 'edit_job']);
        $jobSeeker->givePermissionTo(['apply_for_job']);
    }
}
