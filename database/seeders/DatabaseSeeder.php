<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        // Dùng cái này thì tắt comment cái đó 
        $this->call(WarehouseSeeder::class);
        $this->call(BankAccountSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(EmployeeSeeder::class);
    }
}
