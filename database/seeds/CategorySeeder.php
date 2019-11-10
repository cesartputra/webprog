<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
			[
				'name' => 'Comic',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],[
				'name' => 'Web Design & Programming',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],[
				'name' => 'History',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],[
				'name' => 'Novel',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		);
    }
}
