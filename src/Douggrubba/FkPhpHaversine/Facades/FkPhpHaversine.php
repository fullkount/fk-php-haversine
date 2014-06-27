<?php namespace Douggrubba\FkPhpHaversine\Facades;

use Illuminate\Support\Facades\Facade;

class FkPhpHaversine extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'haversine'; }

}