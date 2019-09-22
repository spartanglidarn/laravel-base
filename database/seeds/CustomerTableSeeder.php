<?php

use Faker\Provider\DateTime;
use Faker\Provider\en_US\Person;
use Faker\Provider\Internet;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 50; $i++) {
            DB::table('customer')->insert([
                'form_id' => rand(1, 1000),
                'first_name' => Person::firstNameMale(),
                'last_name' => Person::firstNameMale(),
                'email' => Person::firstNameMale() . '@gmail.com',
                'telephone_number' => Str::random(10),
                'real_eastate_type' => Str::random(10),
                'bedrooms' => rand(1, 7),
                'bathrooms' => rand(1, 5),
                'submit_date' => DateTime::dateTime(),
            ]);
        }
    }
}
