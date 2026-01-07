<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // News categories
            [
                'name' => 'Match Reports',
                'slug' => 'match-reports',
                'type' => 'news',
                'description' => 'Match reports and game summaries',
                'is_active' => true,
            ],
            [
                'name' => 'Academy News',
                'slug' => 'academy-news',
                'type' => 'news',
                'description' => 'News and updates from NPSC Sports Academy',
                'is_active' => true,
            ],
            [
                'name' => 'Community Impact',
                'slug' => 'community-impact',
                'type' => 'news',
                'description' => 'WMA grassroots programs and community engagement',
                'is_active' => true,
            ],
            [
                'name' => 'Partnership Announcements',
                'slug' => 'partnership-announcements',
                'type' => 'news',
                'description' => 'New sponsors and partnership news',
                'is_active' => true,
            ],
            [
                'name' => 'Technology & Innovation',
                'slug' => 'technology-innovation',
                'type' => 'news',
                'description' => 'GPS tracking, digital transformation, and tech updates',
                'is_active' => true,
            ],
            [
                'name' => 'Press Releases',
                'slug' => 'press-releases',
                'type' => 'news',
                'description' => 'Official press releases and media statements',
                'is_active' => true,
            ],
            [
                'name' => 'Club Announcements',
                'slug' => 'club-announcements',
                'type' => 'news',
                'description' => 'General club news and announcements',
                'is_active' => true,
            ],

            // Program categories
            [
                'name' => 'Youth Development',
                'slug' => 'youth-development',
                'type' => 'programs',
                'description' => 'Youth development programs and initiatives',
                'is_active' => true,
            ],
            [
                'name' => 'Grassroots Football',
                'slug' => 'grassroots-football',
                'type' => 'programs',
                'description' => 'Grassroots football programs in WMA villages',
                'is_active' => true,
            ],

            // Report categories
            [
                'name' => 'Annual Reports',
                'slug' => 'annual-reports',
                'type' => 'reports',
                'description' => 'Annual reports and financial statements',
                'is_active' => true,
            ],
            [
                'name' => 'Strategic Documents',
                'slug' => 'strategic-documents',
                'type' => 'reports',
                'description' => 'Strategic plans and policy documents',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $this->command->info('✅ Categories created successfully!');
        $this->command->info('   - 7 news categories');
        $this->command->info('   - 2 program categories');
        $this->command->info('   - 2 report categories');
    }
}
