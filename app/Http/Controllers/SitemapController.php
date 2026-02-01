<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Homepage
        $sitemap .= '
        <url>
            <loc>' . url('/') . '</loc>
            <lastmod>' . now()->format('Y-m-d') . '</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1.0</priority>
        </url>';
        
        // Services page
        $sitemap .= '
        <url>
            <loc>' . url('/#services') . '</loc>
            <lastmod>' . now()->format('Y-m-d') . '</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>';
        
        // About page
        $sitemap .= '
        <url>
            <loc>' . url('/#about') . '</loc>
            <lastmod>' . now()->format('Y-m-d') . '</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>';
        
        // Projects page
        $sitemap .= '
        <url>
            <loc>' . url('/#projects') . '</loc>
            <lastmod>' . now()->format('Y-m-d') . '</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>';
        
        // Contact page
        $sitemap .= '
        <url>
            <loc>' . url('/#contact') . '</loc>
            <lastmod>' . now()->format('Y-m-d') . '</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>';
        
        $sitemap .= '</urlset>';
        
        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
}
