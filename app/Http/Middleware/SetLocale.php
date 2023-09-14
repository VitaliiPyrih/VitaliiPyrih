<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->cookie('lang') ?? 'en';
        if ($request->query('lang')) {
            $locale = $request->query('lang');
            if (!in_array($locale, config('app.locales'))) {
                return redirect()->route('home');
            }
            Cookie::queue('lang', $locale);
            $redirect = $request->header('referer', '/');
            return redirect($redirect);
        }
        App::setLocale($locale);
        return $next($request);
    }
}
