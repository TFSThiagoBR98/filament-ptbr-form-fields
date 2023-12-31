<?php

namespace Leandrocfe\FilamentPtbrFormFields\Tests;

use Leandrocfe\FilamentPtbrFormFields\FilamentPtbrFormFieldsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentPtbrFormFieldsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
