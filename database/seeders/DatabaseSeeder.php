<?php

namespace Database\Seeders;

use App\Models\StoreSeedersImplemented;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

//        User::factory()->withPersonalTeam()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        //add your seeder class on array
        $seeders = [
            users::class,
            TeamsSeeder::class,
            RolesTableSeeder::class,
            TopMGTPermissionsTableSeeder::class
        ];
        foreach ($seeders as $seeder) {
            if (!StoreSeedersImplemented::where('seeder', $seeder)->first()) {
                $this->call($seeder);
                StoreSeedersImplemented::create(['seeder' => $seeder, 'batch' => 1]);
            }
        }

    }
}
