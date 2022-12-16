<?php

namespace Lancodev\LaravelImpersonate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lancodev\LaravelImpersonate\LaravelImpersonate
 */
class LaravelImpersonate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lancodev\LaravelImpersonate\LaravelImpersonate::class;
    }
}
