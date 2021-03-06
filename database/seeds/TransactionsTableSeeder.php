<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

     //   \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 1,
                'type' => 'deposit',
                'amount' => '2000',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => '30d2bbc0-5d25-49d9-9206-6d7bb45849bc',
            ),
            1 => 
            array (
                'id' => 2,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 1,
                'type' => 'withdraw',
                'amount' => '-50',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Hostel Refundable Deposit For Damages","feecode":" OFEE104 "}',
                'uuid' => '7fbe92a6-d079-480b-9899-88ed50418a95',
            ),
            2 => 
            array (
                'id' => 3,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 1,
                'type' => 'withdraw',
                'amount' => '-900',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Undergraduate Degree Morning Fee","feecode":" FEE103"}',
                'uuid' => '11fee34d-471d-4034-85bd-713e3e0adcbb',
            ),
            3 => 
            array (
                'id' => 4,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '2000',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => '910881ea-cfbb-47e1-8196-19823cde7058',
            ),
            4 => 
            array (
                'id' => 5,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'withdraw',
                'amount' => '-100',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Undergraduate Degree Morning Fee","feecode":" FEE103"}',
                'uuid' => '07e245e0-1f91-47c3-9037-c346d661d925',
            ),
            5 => 
            array (
                'id' => 6,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'withdraw',
                'amount' => '-1000',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Undergraduate Degree Morning Fee","feecode":" FEE103"}',
                'uuid' => '15abb9a1-6110-4e84-8865-fd43f3d05d0c',
            ),
            6 => 
            array (
                'id' => 7,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'withdraw',
                'amount' => '-40',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Hostel Refundable Deposit For Damages","feecode":" OFEE104 "}',
                'uuid' => '89d5b321-8034-4ecf-97e9-ad1a1dfcec30',
            ),
            7 => 
            array (
                'id' => 8,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'withdraw',
                'amount' => '-10',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Hostel Refundable Deposit For Damages","feecode":" OFEE104 "}',
                'uuid' => 'c12a0ab8-a72b-4dc1-8f3c-dfe2a2d0f2ef',
            ),
            8 => 
            array (
                'id' => 9,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'withdraw',
                'amount' => '-50',
                'confirmed' => 1,
                'meta' => '{"Trantype":"Fees Payment","Reference":"Late Registration Penalty","feecode":"OFEE100"}',
                'uuid' => '1a0d7ede-91d7-4c4f-8f3d-daa3d9995c7c',
            ),
            9 => 
            array (
                'id' => 10,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '20000',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => '0653cb48-6d57-42b4-be99-e45d2575e33e',
            ),
            10 => 
            array (
                'id' => 11,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '100',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => 'b4023172-179f-488f-bc0d-0d726c13ad48',
            ),
            11 => 
            array (
                'id' => 12,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '200',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => '8cc21130-3ad0-4539-b512-b3ed61afcd89',
            ),
            12 => 
            array (
                'id' => 13,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '200',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => '7d0d5ecf-0894-4789-9981-04c72f35b7ab',
            ),
            13 => 
            array (
                'id' => 14,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '12',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => 'df792dc5-23f9-4717-ae99-28304c071f26',
            ),
            14 => 
            array (
                'id' => 15,
                'payable_type' => 'App\\User',
                'payable_id' => 3,
                'wallet_id' => 2,
                'type' => 'deposit',
                'amount' => '100',
                'confirmed' => 1,
                'meta' => '{"Trantype":"WALLET TOPUP\\/DEPOSITE","Reference":"DEPOSITE"}',
                'uuid' => '44199a1c-5529-4c02-b8bb-19d71a403d44',
            ),
        ));
        
        
    }
}