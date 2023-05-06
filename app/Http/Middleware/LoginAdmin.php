<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class LoginAdmin
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
        if (session()->get('role') != '1') {
            return redirect()->to('/')->with('gagal', 'Mohon Maaf Fitur ini hanya untuk Super Admin');
        }
        return $next($request);
    }
}
