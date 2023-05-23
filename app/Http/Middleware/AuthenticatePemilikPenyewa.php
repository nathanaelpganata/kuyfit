<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticatePemilikPenyewa extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (empty($guards)) {
            // If no specific guards are provided, allow either 'akun_pemilik_lapangan' or 'akun_penyewa'
            $guards = ['akun_pemilik_lapangan', 'akun_penyewa'];
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }

    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login.index');
    }
}
