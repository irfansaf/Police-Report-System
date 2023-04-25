<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

    class RedirectByRole
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
         */
        public function handle(Request $request, Closure $next): Response
        {
            $user = $request->user();

            if ($user && $user->role) {
                switch ($user->role->name) {
                    case 'admin':
                        if ($request->path() !== 'admin/dashboard') {
                            return redirect('/admin/dashboard');
                        }
                        break;
                    case 'police':
                        if ($request->path() !== 'police/dashboard') {
                            return redirect('/police/dashboard');
                        }
                        break;
                    case 'user':
                        if ($request->path() !== 'dashboard') {
                            return redirect('/dashboard');
                        }
                        break;
                }
            }

            return $next($request);
        }
    }
