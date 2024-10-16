<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        /**
         * validate user before sending to the main file
         */
        $user = User::findOrFail($request->id);

        // if($user->role === 'admin'){
        //     return $next($request);
        // }

        //making  this dynamic
        if($user->role === $role){
            return $next($request);
        }

        return abort(403);
        
    }
}
