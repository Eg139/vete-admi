<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_vet = Role::create(['name' => 'veterinario']);
        $role_owner = Role::create(['name' => 'owner']);
        

        Permission::create(['name' => 'admin.owners.index'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.owners.create'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.owners.edit'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.owners.destroy'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.owners.import'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.owners.export'])->syncRoles([$role_admin,$role_vet]);


        Permission::create(['name' => 'admin.pets.index'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.pets.create'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.pets.edit'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.pets.destroy'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.pets.import'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.pets.export'])->syncRoles([$role_admin,$role_vet,$role_owner]);

        Permission::create(['name' => 'admin.shifts.index'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.shifts.create'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.shifts.edit'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.shifts.destroy'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.shifts.print'])->syncRoles([$role_admin,$role_vet]);

        
        Permission::create(['name' => 'admin.shop-order.index'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.shop-order.create'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.shop-order.edit'])->syncRoles([$role_admin,$role_vet,$role_owner]);
        Permission::create(['name' => 'admin.shop-order.destroy'])->syncRoles([$role_admin,$role_vet]);
        Permission::create(['name' => 'admin.shop-order.print'])->syncRoles([$role_admin,$role_vet]);

        Permission::create(['name' => 'admin.home']);
    }
}
