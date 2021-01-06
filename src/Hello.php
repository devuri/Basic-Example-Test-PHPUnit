<?php

namespace SimpleTest;
/**
 *
 */
class Hello
{
	private $name;

	function __construct( $name )
	{
		$this->name = $name;
	}

	public function say_hello(){
		return 'Hello ' . $this->name;
	}


}
