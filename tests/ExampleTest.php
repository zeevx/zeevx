<?php

namespace Zeevx\Zeevx\Tests;

use Orchestra\Testbench\TestCase;
use Zeevx\Zeevx\ZeevxServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ZeevxServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
