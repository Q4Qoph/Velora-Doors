<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = config('app.url'); // uses .env APP_URL, fallback to current

        $sitemap = Sitemap::create()
            // Home
            ->add(Url::create('/')
                ->setPriority(1.0)
                ->setChangeFrequency('monthly'))
            // About Us
            ->add(Url::create('/about-us')
                ->setPriority(0.8)
                ->setChangeFrequency('monthly'))
            // Our Doors
            ->add(Url::create('/our-doors')
                ->setPriority(0.9)
                ->setChangeFrequency('weekly'))
            // Contact Us
            ->add(Url::create('/contact-us')
                ->setPriority(0.7)
                ->setChangeFrequency('monthly'));

        // --- If you one day have a Product model, add it like this ---
        // use App\Models\Product;
        // Product::where('is_visible', true)->each(function ($door) use ($sitemap) {
        //     $sitemap->add(
        //         Url::create('/our-doors/' . $door->slug)
        //             ->setLastModificationDate($door->updated_at)
        //             ->setPriority(0.8)
        //             ->setChangeFrequency('weekly')
        //     );
        // });

        return $sitemap->toResponse(request());
    }
}