<?php

namespace App\Http\Middleware;

use App\Models\AkunPenyewa;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class PenyewaOnly extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!auth()->check()) {
            return $this->redirectTo($request);
        }

        // check if auth()->user() email's is inside the pemilik's table
        $user = auth()->user();
        if (AkunPenyewa::where('email', $user->email)->count() === 0) {
            abort(Response::HTTP_FORBIDDEN, 'You are not allowed to access this page.');
        }

        return $next($request);
    }

    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login.index');
    }
}
