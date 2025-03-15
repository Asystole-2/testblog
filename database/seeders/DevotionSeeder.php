<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Devotion;
use Carbon\Carbon;

class DevotionSeeder extends Seeder
{
    public function run()
    {
        Devotion::create([
            'title' => 'God’s Love for Us',
            'content' => 'God’s love is unconditional and everlasting...',
            'date' => Carbon::now()->subDays(1)
        ]);

        Devotion::create([
            'title' => 'Walking by Faith',
            'content' => 'We walk by faith and not by sight...',
            'date' => Carbon::now()
        ]);
    }
}
