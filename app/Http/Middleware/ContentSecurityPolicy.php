<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Content Security Policy headers
        $csp = [
//            "default-src 'self';",
//            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net;",
//            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com;",
//            "font-src 'self' https://fonts.gstatic.com;",
//            "img-src 'self' data: https:;",
//            "connect-src 'self';",
//            "frame-src 'none';",
//            "object-src 'none';",
//            "base-uri 'self';",
//            "form-action 'self';",
//            "upgrade-insecure-requests;",
        ];

        $response->headers->set('Content-Security-Policy', implode(' ', $csp));
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
        if ($request->is('img/*') || $request->is('assets/*') || $request->is('logo.png')) {
            $response->headers->set('Cache-Control', 'public, max-age=2592000, immutable');
        }

        return $response;
    }
}
