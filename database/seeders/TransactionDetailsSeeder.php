<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions_detail = [
            'transactions_id' => 1,
            'username' => "mimi",
            'nationality' => "ID",
            'is_visa' => 1,
            'doe_passport'=> "2022-08-12",
        ];
        
        \DB::table('transaction_details')->insert($transactions_detail);
    }
}
