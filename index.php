<?php
$stdin = fopen('php://stdin', 'r');
$yes   = false;

$co = new Checkout();

while (!$yes)
{
    echo 'Add Product?  (y or n) ';

	$input = trim(fgets($stdin));
    $co->scan($input);
    $co->total();
	if ($input == 'y')
	{
		exit('YES!!');
	}
}





