<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();

        if(!$user || !$user->role) {
            Log::info('User not logged in or no role assigned');
            return abort(403);
        }

        Log::info('User ID: ' . $user->id);
        Log::info('User role ID: ' . $user->role_id);
        Log::info('User role: ' . ($user->role ? $user->role->name : 'None'));

        // Add check for role before accessing the 'name' property
        if(!in_array($user->role->name ?? '', $roles)) {
            Log::info('User role not allowed');
            return abort(403);
        }

        // $allowed = false;
        // if ($user->role) {
        //     foreach ($roles as $role) {
        //         if ($user->role->name == $role) {
        //             $allowed = true;
        //             break;
        //         }
        //     }
        // }

        // if (!$allowed) {
        //     Log::info('User role not allowed');
        //     return abort(403);
        // }


        return $next($request);
    }
}
