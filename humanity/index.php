<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-28 22:59:04
 * @version $Id$
 */

include_once("man.php");
include_once("woman.php");

use rewrite\humanity\Man;
use rewrite\humanity\Woman;

// echo person\man::get();
$man = new Man();
echo $man->say();

echo "\n";

$woman = new Woman();
echo $woman->say();