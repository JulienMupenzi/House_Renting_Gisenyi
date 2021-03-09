<?php

namespace App\Providers\BotMan;

use Illuminate\Support\ServiceProvider;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Facebook\FacebookDriver;
use BotMan\Drivers\Web\WebDriver;
use TheCodingMachine\Discovery\Discovery;

class DriverServiceProvider extends ServiceProvider
{
    // /**
    //  * @return void
    //  */
    // public function register()
    // {
    //     $this->discoverDrivers();
    // }

    /**
     * The drivers that should be loaded to
     * use with BotMan
     *
     * @var array
     */
    protected $drivers = [FacebookDriver::class, WebDriver::class];

    /**
     * @return void
     */
    public function boot()
    {
        foreach ($this->drivers as $driver) {
            DriverManager::loadDriver($driver);
        }
    }
    /**
     * Auto-discover BotMan drivers and load them.
     */
    public function discoverDrivers()
    {
        $drivers = Discovery::getInstance()->get('botman/driver');

        foreach ($drivers as $driver) {
            DriverManager::loadDriver($driver);
        }
    }
}
