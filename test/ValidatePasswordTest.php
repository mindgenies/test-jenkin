<?php

class ValidatePasswordTest extends PHPUnit_Framework_TestCase
{
	public function testValidLength()
	{
		$valPass = new ValidatePassword();
		$this->assertTrue($valPass->ValidatePasswordLegth("12344353"));
	}
}

?>