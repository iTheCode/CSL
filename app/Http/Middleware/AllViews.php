<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class AllViews {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $user;
    private $signed_in;
    private $name;
    private $position;
    private $system_name;
    private $year;


    public function handle($request, Closure $next)
    {
        $this->user = \Auth::user();
        $this->signed_in = \Auth::check();
        $this->system_name = "CSLuren";
        $this->year = date('Y');
        if($this->signed_in){
            $this->position = $this->user->area->name;
            $this->name = $this->user->name." ".$this->user->paternal;
            View::share('user', $this->name);
            View::share('position', $this->position);
        }
        View::share('system_name', $this->system_name);
        View::share('this_year', $this->year);
        return $next($request);
    }
}