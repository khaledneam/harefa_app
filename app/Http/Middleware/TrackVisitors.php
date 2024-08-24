<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Capture the visitor's IP
          $ip = $request->ip();

           // Get the location data
        $location = geoip($ip);


        // Store the visitor data in the database
        DB::table('visitors')->insert([
            'ip_address' => $ip,
            'country' => $location->country,
            'city' => $location->city,
            'latitude' => $location->lat,
            'longitude' => $location->lon,
            'visited_at' => now(),
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

          return $next($request);
    }
}
