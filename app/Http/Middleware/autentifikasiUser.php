<?php

namespace App\Http\Middleware;

use Closure;

class autentifikasiUser
{
    private $auth;
    public function _construct(){

        $this->auth = app('auth')
    }
    public function handle($request, Closure $next)
    {
        //return $next($request);
        if($this->auth->check()){
            return $next($request)
        }
        return redirect('login')->withErrors('silahkan login terlebih dahulu');
    }
}
