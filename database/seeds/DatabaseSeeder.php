<?php

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
         $this->call(JabatanSeeder::class);
         $this->call(PangkatSeeder::class);
         $this->call(PosisiSeeder::class);
         $this->call(UnitSeeder::class);
         $this->call(LevelSeeder::class);
         $this->call(KaryawanSeeder::class);
    }
}
