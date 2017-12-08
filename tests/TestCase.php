<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Debug\ExceptionHandler;
use App\Exceptions\Handler;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp()
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }


    protected function signIn($user = null)
    {
        $user = $user ?: create('App\User');

        $this->actingAs($user);

        return $this;
    }

//    protected function disableExceptionHandling()
//    {
//        $this->oldExceptionHandler = $this->app->make(ExceptionHandler::class);
//
//        $this->app->instance(ExceptionHandler::class, new class extends Handler {
//            public function __construct() {}
//            public function report(\Exception $e) {}
//            public function render($request, \Exception $e) {
//                Log::info("I'm Here");
//                throw $e;
//            }
//        });
//    }
//
//    protected function withExceptionHandling()
//    {
//        $this->app->instance(ExceptionHandler::class, $this->oldExceptionHandler);
//
//        return $this;
//    }
}
