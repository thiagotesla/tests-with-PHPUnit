<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MultipleDependenciesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProducerFirst()
    {
        $this->assertTrue(true);

        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);

        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */

    public function testProducerConsumer()
    {
        $this->assertEquals(
            ['first', 'second'],
            func_get_args()
        );
    }
}
