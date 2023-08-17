<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Permissions
{

    public function handle($request, Closure $next, $data)
    {

        // if(Auth::user()->IsAdmin == 1){
        //     return $next($request);
        //  }
        // if(Auth::user()->role_id != 1){
        //     return redirect()->route('home')->with('unsuccess',"You don't have access to that section");
        // }

        $user = Auth::user();
        if ($user && $user->sectionCheck($data)) {
            return $next($request);
        }

        return redirect()->route('home')->with('unsuccess', "You don't have access to that section");
    }
}
