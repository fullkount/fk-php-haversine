<?php
/**
 * FkPhpHaversine Interface
 *
 * @package FkPhpHaversine
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace Douggrubba\FkPhpHaversine;

use Illuminate\Support\ServiceProvider;

class FkPhpHaversineServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('douggrubba/fk-php-haversine');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerEvents();
        $this->registerCommands();
    }

}