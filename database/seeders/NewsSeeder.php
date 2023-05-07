<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!News::where('title', 'BNHS conducts School-Based STEM Research Fair 2023')->first()) {
            News::create([
                'date' => '2023-05-07',
                'title' => 'BNHS conducts School-Based STEM Research Fair 2023',
                'content' => 'Bulan National High School (BNHS) hosted its first School-Based STEM Research Fair 2023, which was a huge success as students from different grade levels showcased their scientific projects. The event aimed to encourage students to pursue their interests in science, technology, engineering, and mathematics (STEM) and to promote a love for research and experimentation.',
                'author' => 'Agri-Map',
                'image' => '1683441257.png',
            ]);
        }
    }
}
