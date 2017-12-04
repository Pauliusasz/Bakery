<?php

class Bun
{

	const OWNER = 'Bakery Inc.';

	public static $OWNER_TWO = 'UAB Kepykla';

	private $a = 'A';

	protected $b = 'B';

	public $c = 'C';
}

$bun = new Bun();
// print_r($bun->c);
print_r(Bun::OWNER);
print_r(Bun::$OWNER_TWO);