<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommunityLinkVote;
use Carbon\Carbon;

class CommunityLinkVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes =[
            [
                'user_id' => 11,
                'community_link_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 10,
                'community_link_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 11,
                'community_link_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        CommunityLinkVote::insert($votes);
    }
}
