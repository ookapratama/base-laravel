<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // General
            [
                'key' => 'app_name',
                'value' => 'Base Laravel',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Nama Aplikasi',
            ],
            [
                'key' => 'app_description',
                'value' => 'Base project builder untuk project Ooka Pratama.',
                'group' => 'general',
                'type' => 'textarea',
                'label' => 'Deskripsi Aplikasi',
            ],
            [
                'key' => 'app_keywords',
                'value' => 'laravel, base template, premium dashboard',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Kata Kunci SEO',
            ],
            [
                'key' => 'app_logo',
                'value' => null,
                'group' => 'general',
                'type' => 'image',
                'label' => 'Logo Aplikasi',
            ],
            [
                'key' => 'app_favicon',
                'value' => null,
                'group' => 'general',
                'type' => 'image',
                'label' => 'Favicon',
            ],

            // Contact & Social
            [
                'key' => 'contact_email',
                'value' => 'admin@ooka.id',
                'group' => 'contact',
                'type' => 'text',
                'label' => 'Email Kontak',
            ],
            [
                'key' => 'contact_phone',
                'value' => '08123456789',
                'group' => 'contact',
                'type' => 'text',
                'label' => 'Nomor WhatsApp',
            ],
            [
                'key' => 'social_instagram',
                'value' => 'https://instagram.com/ookapratama',
                'group' => 'contact',
                'type' => 'text',
                'label' => 'URL Instagram',
            ],

            // System
            [
                'key' => 'maintenance_mode',
                'value' => '0',
                'group' => 'system',
                'type' => 'boolean',
                'label' => 'Mode Perawatan',
            ],
            [
                'key' => 'allow_registration',
                'value' => '1',
                'group' => 'system',
                'type' => 'boolean',
                'label' => 'Izinkan Registrasi Baru',
            ],
            [
                'key' => 'theme_color',
                'value' => '#666cff',
                'group' => 'general',
                'type' => 'color',
                'label' => 'Warna Tema Utama',
            ],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['key' => $setting['key']],
                array_merge($setting, ['created_at' => now(), 'updated_at' => now()])
            );
        }
    }
}
