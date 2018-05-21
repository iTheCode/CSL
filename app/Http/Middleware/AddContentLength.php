<?php 
namespace App\Http\Middleware;

use Closure;

class AddContentLength {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if(!$response->header('Content-Length',strlen($response->content())))
            @header("Content-length: ",strlen($response->content()));
            @header("X-Total-length: ",strlen($response->content()));
        return $response;
    }
}