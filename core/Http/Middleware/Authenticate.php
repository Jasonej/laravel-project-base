<?php

declare(strict_types=1);

namespace Core\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        return !$request->expectsJson() ? route('login') : null;
    }
}
