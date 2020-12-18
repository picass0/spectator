<?php

namespace Spectator\Tests;

use Spectator\Spectator;
use Spectator\Middleware;
use Illuminate\Support\Facades\Route;
use Spectator\SpectatorServiceProvider;

class AssertionsTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app->register(SpectatorServiceProvider::class);

        Spectator::using('Test.v1.json');
    }

    public function testExceptionPointsToMixinMethod()
    {
        $this->expectException(\ErrorException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('No response object matching returned status code [500].
Failed asserting that true is false.');

        Route::get('/users', function () {
            throw new \Exception('Explosion');
        })->middleware(Middleware::class);

        $this->getJson('/users')
            ->assertValidRequest()
            ->assertValidResponse(200);
    }
}