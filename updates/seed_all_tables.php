<?php namespace RainLab\Translate\Updates;

use October\Rain\Database\Updates\Seeder;
use RainLab\Translate\Models\Locale;

class SeedAllTables extends Seeder
{

    public function run()
    {
        if(Locale::count() === 0) {
            Locale::create([
                'code' => 'fa',
                'name' => 'فارسی',
                'is_default' => true,
                'is_enabled' => true
            ]);
            Locale::create([
                'code' => 'en',
                'name' => 'English',
                'is_default' => false,
                'is_enabled' => false
            ]);
        }
    }

}
