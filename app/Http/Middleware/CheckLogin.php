<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
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
        // Nếu đã đăng nhập thì sẽ có id
        if(!session()->has('id')){
            return redirect('/admin.shop/login');
        }
        else{
            return $next($request);
        }

    }
}
