<?php

namespace Database\Seeders;

use App\Models\SystemSettings;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $theme_name = ["default", "foster", "electro", "premium", "classic", "paradise"];

        $systemSettings = ["about_us", "business_mode", "cancellation-policy", "colors", "company_copyright_text", "company_email", "company_fav_icon", "company_footer_logo", "company_mobile_logo", "company_name", "company_phone","company_web_logo", "cookie_setting", "country_code", "currency_model", "currency_symbol_position", "email_verification", "language", "maintenance_mode", "messenger", "privacy_policy", "recaptcha", "refund-policy", "return-policy", "shop_address", "social_login",  "system_default_currency", "temporary_close", "terms_and_conditions", "twilio_sms", "whatsapp"];

        foreach ($systemSettings as $value) {
            $item = SystemSettings::where('name','=',$value)->first();
            if (!$item) {
                SystemSettings::insert([
                    'name'=>$value,
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

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
