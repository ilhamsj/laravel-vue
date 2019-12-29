<?php

use Illuminate\Database\Seeder;

class TransactionsProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\TransactionProduct::class, 10)->create();
    }
}
