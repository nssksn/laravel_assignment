<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('replies')->insert([
            [
                'tweet_id' => 1,
                'user_id' => 2,
                'reply' => 'Sounds delicious!',
            ],
            [
                'tweet_id' => 2,
                'user_id' => 3,
                'reply' => 'Which show are you watching?',
            ],
            [
                'tweet_id' => 3,
                'user_id' => 4,
                'reply' => 'Indeed, it’s wonderful!',
            ],
            [
                'tweet_id' => 4,
                'user_id' => 5,
                'reply' => 'What are your plans?',
            ],
            [
                'tweet_id' => 5,
                'user_id' => 6,
                'reply' => 'I’d love to read that book too!',
            ],
            [
                'tweet_id' => 6,
                'user_id' => 7,
                'reply' => 'You are always so positive!',
            ],
            [
                'tweet_id' => 7,
                'user_id' => 8,
                'reply' => 'Any special plans for the holidays?',
            ],
            [
                'tweet_id' => 8,
                'user_id' => 9,
                'reply' => 'Good for you! Keep it up.',
            ],
            [
                'tweet_id' => 9,
                'user_id' => 10,
                'reply' => 'Learning is the key to success.',
            ],
            [
                'tweet_id' => 10,
                'user_id' => 1,
                'reply' => 'Totally agree!',
            ],
        ]);
    }
}
