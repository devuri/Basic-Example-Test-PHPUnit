<?php

use PHPUnit\Framework\TestCase;
use SimpleTest\Hello;
/**
 *
 */
class HelloTest extends TestCase
{

	public function testSayHello(): void
    {
		$hello = new Hello( 'World' );
        $this->assertEquals(
            'Hello World',
            $hello->say_hello()
        );
    }
}
