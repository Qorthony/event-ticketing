<?php

namespace App\Http\Middleware;

use App\Models\Creator;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsCreator
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
        $user = User::where('id',Auth::guard('web')->id())
                        ->whereNull('creator_id')
                        ->exists();
        if ($user) {
            return redirect('/creator/first');
        }
        return $next($request);
    }
}
