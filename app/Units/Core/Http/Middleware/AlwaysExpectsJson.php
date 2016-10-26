<?php

namespace Confee\Units\Core\Http\Middleware;

/**
 * Class AlwaysExpectsJson.
 */
class AlwaysExpectsJson
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $request->headers->add(['Accept' => 'application/json']);

        return $next($request);
    }
}