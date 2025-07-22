<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml for frontend routes';

    public function handle()
    {
        $sitemap = Sitemap::create();

        $now = Carbon::now()->toAtomString();

        $routes = [
            '/',
            '/food-menu',
            '/all-menu',
            '/online-coaching',
            '/about-us',
            '/terms-and-conditions',
            '/privacy-policy',
            '/food-pricing',
            '/food-subscription',
            '/connect-with-us',
        ];

        foreach ($routes as $route) {
            $sitemap->add(
                Url::create($route)
                    ->setLastModificationDate(Carbon::now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully at public/sitemap.xml');
    }
}
