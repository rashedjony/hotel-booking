<?php

use Illuminate\Database\Seeder;
use App\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        Member::trunkcate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Members in our database:
        for ($i = 0; $i < 5; $i++) {
            Member::create([
                'name' => 'john',
                'member_id' => 1,
                'phone_number' => 324324,
                'office_name' => 'sentence',
                'designation' => 'sentence',
                'email' => 'my@mail.com',
                'image' => 'photo.jpeg',
                'created_at' => new DateTime
            ]);
        }
    }
}
