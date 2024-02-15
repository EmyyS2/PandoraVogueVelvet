<?php

namespace App\Http\Middleware;

use App\Models\ADM;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyAdminGuard
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
        if(auth()->user()instanceof ADM){
            return response()->json([
                'status'=>false,
                'message'=>'Não é uma instancia de ADM'
            ]);
            }
            
        return $next($request);
    }
}
