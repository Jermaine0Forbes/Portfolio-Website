<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        $result = Admin::get();

        if(empty($result)){

           return redirect(route('admin.register')); 

        }

        return $next($request);
    }
}
