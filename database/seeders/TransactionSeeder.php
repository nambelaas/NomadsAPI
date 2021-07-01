<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            'travel_packages_id' => 2,
            'users_id' => 3,
            'additional_visa' => 5,
            'transaction_total' => 2,
        ];
        
        \DB::table('transactions')->insert($transactions);
    }
}
