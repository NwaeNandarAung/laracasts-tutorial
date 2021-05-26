<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel;
use Carbon\Carbon;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels =[
            [
                'title' => 'PHP',
                'slug' => 'php',
                'color' => 'red',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Javascript',
                'slug' => 'javascript',
                'color' => 'green',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Ruby',
                'slug' => 'ruby',
                'color' => 'pink',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        Channel::insert($channels);
    }
}
