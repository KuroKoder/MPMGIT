<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // $rolesFromDatabase = Role::all();

        // foreach ($rolesFromDatabase as $roles) {
        //     if ($role == $roles->name && auth()->user()->role_id != $roles->id) {
        //         // return response(view('beranda')->with('user', Auth::user()));
        //         return redirect()->to('/');
        //     }
        // }
        if (! $request->user() || ! in_array($request->user()->role_id, ['1', '2'])) {
            return redirect()->to('/');
        }

        return $next($request);
    }
}
