<?php

namespace App\Http\Middleware;
use log;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/get-tours',
    ];

    protected function tokensMatch($request)
    {
        \Log::info('CSRF Token from Request: ' . $this->getTokenFromRequest($request));
        \Log::info('Session Token: ' . $request->session()->token());

        return parent::tokensMatch($request);
    }



}
