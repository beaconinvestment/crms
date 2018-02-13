<?php

use Illuminate\Database\Seeder;

class beacontableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// clear our database ------------------------------------------
        DB::table('customer')->delete();
        DB::table('investment')->delete();
        DB::table('investment_type')->delete();


        // seed our customer table -----------------------


        // bear 1 is named Lawly. She is extremely dangerous. Especially when hungry.
        $bearLawly = Customer::create(array(
            'name'         => 'Ahmed',
            'type'         => 'Invester'

        ));



        $this->command->info('The customers are alive!');

        // seed our fish table ------------------------
        // our fish wont have names... because theyre going to be eaten

        // we will use the variables we used to create the bears to get their id

        Investment::create(array(
            'total_amount'  => 50000

        ));


        $this->command->info('investment made!');

        // seed our trees table ---------------------
        Investmenttype::create(array(
            'type'    => 'Residential'

        ));

        $this->command->info('type added!');


    }

    }


