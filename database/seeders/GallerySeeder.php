<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::truncate();
        $default_galleries = array(
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0024.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0012.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0022.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0017.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0030.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0029.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0011.jpg",
                'status' => true,
            ],
            [
                'title' => 'Project Building',
                'image' => "assets/front/images/gallery/IMG-20250201-WA0015.jpg",
                'status' => true,
            ],


        );

        if (count($default_galleries) > 0) {
            foreach ($default_galleries as $gallery) {
                Gallery::create($gallery);
            }
        }
    }
}
