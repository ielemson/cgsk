<?php

namespace App\Http\Middleware;

use Closure;

class VerifyInstallation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if (!file_exists(storage_path('installed')) && !$request->is('install*')) {
        //   return redirect('install');
        // }
        return $next($request);
    }
}
