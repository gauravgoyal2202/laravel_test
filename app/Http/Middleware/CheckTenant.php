<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Tenant;

class CheckTenant
{
    public function handle($request, Closure $next)
    {
        if (!$request->hasHeader('tenant_id')) {
            // Return error response
            return response()->json(['error' => 'No tenant_id provided'], 401);
        }

        // Get tenant_id from header
        $tenant_id = $request->header('tenant_id');
        
        // Check if tenant exists
        $tenant = Tenant::where('tenant_hash', $tenant_id)->first();
        if (!$tenant) {
            // Return error response
            return response()->json(['error' => 'Invalid tenant_id'], 401);
        }

        // If all checks pass, forward the request
        $request->tenant = $tenant;

        return $next($request);
    }
}

