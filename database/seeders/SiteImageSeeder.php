<?php

namespace Database\Seeders;

use App\Models\SiteImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear old records
        SiteImage::truncate();

        // Banners
        SiteImage::insert([
            [
                'type' => 'banner',
                'image' => 'banners/banner1.png',
                'title' => 'Big Sale',
                'subtitle' => 'Up to 50% off',
            ],
            [
                'type' => 'banner',
                'image' => 'banners/banner2.png',
                'title' => 'New Arrivals',
                'subtitle' => 'Check our fresh collection',
            ],
            [
                'type' => 'banner',
                'image' => 'banners/banner3.png',
                'title' => 'New Arrivals',
                'subtitle' => 'Check our fresh collection',
            ],
        ]);

        // Right Card
        SiteImage::create([
            'type' => 'right_card',
            'image' => 'cards/side.png',
            'title' => 'Download Our App',
            'subtitle' => 'Shop anytime, anywhere',
        ]);

        // Google Play
        SiteImage::create([
            'type' => 'google_play',
            'image' => 'store/google-play.png',
            'link'  => 'https://play.google.com/store/apps/details?id=com.example.app',
        ]);

        // App Store
        SiteImage::create([
            'type' => 'app_store',
            'image' => 'store/app-store.png',
            'link'  => 'https://apps.apple.com/app/example-app/id1234567890',
        ]);

        // Logo
        SiteImage::create([
            'type' => 'logo',
            'image' => 'logos/logo.png',
        ]);

        // Payment Icons
        SiteImage::insert([
            [
                'type' => 'payment',
                'image' => 'payments/visa.png',
            ],
            [
                'type' => 'payment',
                'image' => 'payments/mastercard.png',
            ],
            [
                'type' => 'payment',
                'image' => 'payments/bkash.png',
            ],
        ]);
    }
}
