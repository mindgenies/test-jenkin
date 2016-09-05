<?php
class ValidatePassword {
	const PASS_LEN_MIN = 6;
	const PASS_LEN_MAX = 20;

	public function ValidatePasswordLegth($Password)
	{
		$length = strlen($Password);
		return $length >= SELF::PASS_LEN_MIN && $length <= SELF::PASS_LEN_MAX;
	}
}

