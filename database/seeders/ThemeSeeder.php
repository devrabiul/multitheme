<?php

namespace Database\Seeders;

use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $theme_name = ["default", "foster", "electro", "premium", "classic", "paradise"];

        foreach ($theme_name as $theme) {
            $item = Theme::where('name','=',$theme)->first();
            if (!$item) {
                Theme::insert([
                    'name'=>$theme,
                    'author'=>"Admin",
                    'version'=>"1.0",
                    'status'=>1,
                    'created_at'=>Carbon::now(),
                ]);
            }
        }
    }
}
