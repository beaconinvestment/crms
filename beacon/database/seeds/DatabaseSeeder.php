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
            'name' => 'Zahid khan',
            'cell_no' => '03336002265'
        ]);
        $this->command->info('The customers are alive!');

        DB::table('investment_type')->insert([
            'type' => 'Cesidential'
        ]);

        DB::table('investment')->insert([
           'total_amount'=> '45000',
            'customer_id' => '12',
            'investType'=>'3'
        ]);

    }
}
