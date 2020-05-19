<?php

namespace App\Http\Middleware;

use Closure;

class YoungMiddleware
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
		//如果年龄参数大于25 则重定向到首页
		if($request->age > 25){
			return redirect('/');
		}
        return $next($request);
    }
}
