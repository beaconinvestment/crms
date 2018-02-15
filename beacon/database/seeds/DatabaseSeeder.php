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
        DB::table('customers')->insert([
            'name' => 'Ahmed',
            'cell_no' => '03310000000'
        ]);
        $this->command->info('The customers are alive!');

        DB::table('investment_type')->insert([
            'type' => 'Residential'
        ]);

        DB::table('investment')->insert([
           'total_amount'=> '5000',
            'customer_id' => '1',
            'investType'=>'1'
        ]);

    }
}
