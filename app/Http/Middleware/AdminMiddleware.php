<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Verificar si el usuario tiene algún rol o permiso necesario para acceder al backoffice
            if (Auth::user()->hasAnyRole(['admin', 'owner', 'veterinario']) || Auth::user()->can('admin.home')) {
                return $next($request); // Permitir acceso si cumple con algún rol o permiso
            }
        }

        // Redirigir si no tiene acceso al sistema administrativo
        return redirect('/home')->with('error', 'No tienes acceso a esta área.');
    }
}
