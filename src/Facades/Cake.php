<?php

namespace LaravelCake\Facades;

use Illuminate\Support\Facades\Facade;

class Cake extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cake';
    }
}
