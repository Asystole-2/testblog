<?php

namespace Database\Seeders;

use App\Models\Devotion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DevotionSeeder extends Seeder
{
    public function run()
    {
        $devotions = [
            [
                'title' => 'God’s Love for Us',
                'content' => 'God’s love is unconditional and everlasting. It is a love that surpasses all understanding and is freely given to us despite our flaws and failures.',
                'date' => Carbon::now()->subDays(1),
            ],
            [
                'title' => 'Walking by Faith',
                'content' => 'We walk by faith and not by sight. This means trusting in God’s plan even when we cannot see the outcome.',
                'date' => Carbon::now(),
            ],
            [
                'title' => 'The Power of Forgiveness',
                'content' => 'Forgiveness is a powerful tool that frees us from the bondage of bitterness and anger. It allows us to move forward in peace.',
                'date' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'The Joy of Salvation',
                'content' => 'Salvation brings joy that is unspeakable and full of glory. It is a gift that we should cherish and share with others.',
                'date' => Carbon::now()->subDays(3),
            ],
            [
                'title' => 'Trusting in God’s Timing',
                'content' => 'God’s timing is perfect, even when it doesn’t align with our own plans. Trusting in His timing brings peace and fulfillment.',
                'date' => Carbon::now()->subDays(4),
            ],
            [
                'title' => 'The Importance of Prayer',
                'content' => 'Prayer is our direct line of communication with God. It strengthens our relationship with Him and aligns our hearts with His will.',
                'date' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Living a Life of Gratitude',
                'content' => 'Gratitude shifts our focus from what we lack to the abundance of blessings God has already provided.',
                'date' => Carbon::now()->subDays(6),
            ],
            [
                'title' => 'The Strength of Humility',
                'content' => 'Humility is not thinking less of yourself but thinking of yourself less. It allows God to work through us in mighty ways.',
                'date' => Carbon::now()->subDays(7),
            ],
            [
                'title' => 'The Peace of God',
                'content' => 'God’s peace surpasses all understanding and guards our hearts and minds in Christ Jesus.',
                'date' => Carbon::now()->subDays(8),
            ],
            [
                'title' => 'The Power of God’s Word',
                'content' => 'The Bible is alive and active, sharper than any two-edged sword. It guides, corrects, and transforms us.',
                'date' => Carbon::now()->subDays(9),
            ],
            // Add 40 more devotions here...
        ];

        // Insert devotions into the database
        foreach ($devotions as $devotion) {
            Devotion::create($devotion);
        }
    }
}
