<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

use App\Models\Donneurs;
use App\Models\Hopitale;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $credentials = $request->only('email','password');

        if(auth()->attempt($credentials,['table'=>'donneurs'])){

            return redirect()->route('client.index');

        }elseif(auth()->attempt($credentials,['table'=>'hopitales'])){

            return redirect()->route('client.index3');

        }
        return $next($request);
    }
}
