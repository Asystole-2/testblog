<?php

namespace Database\Seeders;

use App\Models\Study;
use Illuminate\Database\Seeder;

class StudySeeder extends Seeder
{
    public function run()
    {
        $studies = [
            [
                'topic' => 'Faith in God',
                'description' => 'Understanding the importance of faith in our spiritual journey. Faith is the assurance of things hoped for, the conviction of things not seen.',
            ],
            [
                'topic' => 'Power of Prayer',
                'description' => 'How prayer strengthens our connection with God. Prayer is a direct line to God and a powerful tool for change.',
            ],
            [
                'topic' => 'The Role of the Holy Spirit',
                'description' => 'The Holy Spirit guides, comforts, and empowers us in our daily lives. Understanding His role is crucial for spiritual growth.',
            ],
            [
                'topic' => 'The Importance of Scripture',
                'description' => 'The Bible is God’s Word and is essential for teaching, rebuking, correcting, and training in righteousness.',
            ],
            [
                'topic' => 'The Fruit of the Spirit',
                'description' => 'The fruit of the Spirit is love, joy, peace, patience, kindness, goodness, faithfulness, gentleness, and self-control.',
            ],
            [
                'topic' => 'The Armor of God',
                'description' => 'Put on the full armor of God so that you can stand against the schemes of the devil.',
            ],
            [
                'topic' => 'The Great Commission',
                'description' => 'Go and make disciples of all nations, baptizing them in the name of the Father, Son, and Holy Spirit.',
            ],
            [
                'topic' => 'The Beatitudes',
                'description' => 'The Beatitudes describe the attitudes and characteristics of those who are blessed by God.',
            ],
            [
                'topic' => 'The Parables of Jesus',
                'description' => 'Jesus used parables to teach profound spiritual truths in simple, relatable stories.',
            ],
            [
                'topic' => 'The Ten Commandments',
                'description' => 'The Ten Commandments are God’s laws for living a righteous and holy life.',
            ],
            // Add 40 more studies here...
        ];

        // Insert studies into the database
        foreach ($studies as $study) {
            Study::create($study);
        }
    }
}
