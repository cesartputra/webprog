<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Yu-Gi-Oh! Vol 38',
            'category_id' => 1,
            'price' => 22500,
            'description' => 'Yu-Gi-Oh! is a manga series about games by Kazuki Takahashi, which the entire Yu-Gi-Oh! franchise originated from.
			It was serialized in Shueisha\'s Weekly Shonen Jump from September 30, 1996 to March 8, 2004. 343 chapters were published. These were reprinted in 38 volumes in the tankoban and 22 in the bunkoban.
			The story was initially episodic, with a few exceptions. It focused on the adventures of Yugi Mutou, who would unknowingly become possessed by Dark Yugi and defeat bullies and evildoers in dangerous Shadow Games. The story later focuses more on the card game Duel Monsters as a plot device in two tournament arcs and stories spanning over many more chapters. In the final arc, Dark Yugi relives his past life as a Pharaoh through a role-playing game, the Shadow RPG.',
			'picture' => 'nopicture.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
