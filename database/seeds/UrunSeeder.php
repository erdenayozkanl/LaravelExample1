<?php

use Illuminate\Database\Seeder;

class UrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\Urun',100)->create();
    }
}
