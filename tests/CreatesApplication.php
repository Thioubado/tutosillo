<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
    // public function testBasicTest(): void
    // {
    //     $data = [10, 20, 30];
    //     $result = array_sum($data);
    //     $this->assertEquals(780, $result);
    // }

    // public function testBasicTest(): void
    // {
    //     $data = 'Je suis petit';
    //     $this->assertTrue(str()->startsWith($data, 'Je'));
    //     $this->assertFalse(str()->startsWith($data, 'Tu'));
    //     $this->assertSame(str()->startsWith($data, 'Tu'), false);
    //     $this->assertStringStartsWith('Je', $data);
    //     $this->assertStringEndsWith('petit', $data);
    // }

    // public function testBasicTest(): void
    // {
    //     $response = $this->get('/');
    //     $response->assertSuccessful();
    //     $this->assertEquals('coucou', $response->getContent());
    // }

    public function testBasicTest(): void
    {
        $response = $this->get('/');
        $response->assertViewHas('message', 'Vous y êtes !');
    }
}
