<?php

namespace App\Http\Middleware;

use App\Traits\ApiTraits;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateAppKeyApi
{
    use ApiTraits;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Define your app key
        $appKey = env('APP_KEY_API'); // or you can define a custom key in your .env file like APP_API_KEY

        // Validate the app key from the request
        if ($request->header('app_key_API') !== $appKey) {
            return $this->returnError('Unauthorized');
        }

        return $next($request);
    }
}
