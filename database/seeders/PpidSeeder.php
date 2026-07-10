<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PpidCategory;
use App\Models\PpidDocument;

class PpidSeeder extends Seeder
{
    public function run(): void
    {
        // 🔥 Buat Category dulu
        $categories = [];

        for ($i = 1; $i <= 3; $i++) {
            $categories[] = PpidCategory::create([
                'name' => 'Category ' . $i,

            ]);
        }

        // 🔥 Buat Document + Translation
        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {

                $doc = PpidDocument::create([
                    'category_id' => $category->id,
                    'file' => 'dummy-' . $i . '.pdf',
                     'thumbnail' => 'uploads/ppid/thumb-' . $i . '.jpg',

                ]);

                // 🔥 Translation (ini yang penting buat whereHas kamu)
                $doc->translations()->create([
                    'title' => 'Dokumen ' . $i . ' - ' . $category->name,
                ]);
            }
        }
    }
}
