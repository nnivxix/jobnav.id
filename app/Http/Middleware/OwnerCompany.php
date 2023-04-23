<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerCompany
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
        //http://www.droidmonk.com/laravel/middleware-to-verify-ownership/ 
        $company_slug = $request->route()->parameter('company.slug');
        $company = Company::all()->where('slug', $company_slug)->first();
        if ($company->ownedby !== auth()->user()->id) {
            return redirect('/companies');
        }
        return $next($request);
    }
}
