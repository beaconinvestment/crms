<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Eloquent::unguard();

        // call our class and run our seeds
//        $this->call('beacontableseeder');
//        $this->command->info('beacon app seeds finished.');

//        DB::table('users')->insert([
//            'name' => str_random(10),
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);
//        DB::table('customers')->insert([
//
//            'id' => 'bi00001',
//            'fname' => 'razaq khan',
//            'lname' => 'chaudry',
//            'cell_no' => '03217878',
//            'cnic' => '61101787878',
//            'address' => 'karachi,pakistan'
//        ]);
//        $this->command->info('The customers are alive!');
//
//        DB::table('investment_type')->insert([
//            'type' => 'Residential'
//        ]);
//
//        DB::table('investment')->insert([
//           'total_amount'=> '45000',
//            'customer_id' => 'bi00001',
//            'investType'=>'3'
//        ]);
//        DB::table('customers')->insert([
//
//            'id' => 'bi00002',
//            'fname' => 'shaban khan',
//            'lname' => 'chaudry',
//            'cell_no' => '03217788',
//            'cnic' => '611017878454',
//            'address' => 'lahore,pakistan'
//        ]);
//        $this->command->info('The customers are alive!');
//
//        DB::table('investment_type')->insert([
//            'type' => 'Commertial'
//        ]);
//
//        DB::table('investment')->insert([
//            'total_amount'=> '425000',
//            'customer_id' => 'bi00002',
//            'investType'=>'3'
//        ]); DB::table('customers')->insert([
//
//        'id' => 'bi00003',
//        'fname' => 'Ali khan',
//        'lname' => 'chatha',
//        'cell_no' => '0321721878',
//        'cnic' => '61101723148',
//        'address' => 'Peshawar,pakistan'
//    ]);
//        $this->command->info('The customers are alive!');
//
//        DB::table('investment_type')->insert([
//            'type' => 'Residential'
//        ]);
//
//        DB::table('investment')->insert([
//            'total_amount'=> '2105000',
//            'customer_id' => 'bi00003',
//            'investType'=>'3'
//        ]); DB::table('customers')->insert([
//
//        'id' => 'bi00004',
//        'fname' => 'shoiab',
//        'lname' => 'akhtar',
//        'cell_no' => '032135578',
//        'cnic' => '61101723238',
//        'address' => 'multan,pakistan'
//    ]);
//        $this->command->info('The customers are alive!');
//
//        DB::table('investment_type')->insert([
//            'type' => 'Residential'
//        ]);

        DB::table('investment')->insert([
            'total_amount'=> '785000',
            'customer_id' => 'bi00004',
            'investType'=>'2'
        ]);

    }
}
