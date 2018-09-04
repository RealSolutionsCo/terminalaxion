<?php

use Illuminate\Database\Seeder;

class ShareholderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\shareholder::class,80)->create();
    }
}
