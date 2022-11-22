<?php

namespace Kylekanderson\LaravelImpersonate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kylekanderson\LaravelImpersonate\LaravelImpersonate
 */
class LaravelImpersonate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kylekanderson\LaravelImpersonate\LaravelImpersonate::class;
    }
}
