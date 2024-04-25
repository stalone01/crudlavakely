<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //verifier si l'user est admin
        if ($request->user()->admin)
        {
            //Si oui, on continue la requete
            // dd($request->user()->admin);

            return $next($request);
        }else{
            //si non, reqquette 403
            abort(403);
        }
    }
}
