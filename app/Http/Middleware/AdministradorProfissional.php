<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdministradorProfissional
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('profissional'))
            return $next($request);

        return abort(401,'você não possui autorização para acessar esta página');
    }
}
