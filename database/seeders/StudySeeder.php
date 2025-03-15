<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Study;

class StudySeeder extends Seeder
{
    public function run()
    {
        Study::create([
            'topic' => 'Faith in God',
            'description' => 'Understanding the importance of faith in our spiritual journey.'
        ]);

        Study::create([
            'topic' => 'Power of Prayer',
            'description' => 'How prayer strengthens our connection with God.'
        ]);
    }
}
