<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FlutterWaveSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $verif = $request->header('verif-hash');

        if ($verif !== env('FLUTTERSECRETHASH')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }


}
