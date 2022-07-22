<?php

namespace Tests\Feature;

use Tests\TestCase;

class StackTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testEmpty(){
        $stack = [];
        $this->assertEquals(0, count($stack));

        return $stack;
    }

     /**
     * @depends testEmpty
     */

    public function testPush(array $stack){
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));
        $this->assertNotEmpty($stack);

        return $stack;
    }
}

