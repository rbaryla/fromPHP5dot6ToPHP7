<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 12.11.2016
 * Time: 23:46
 */

$bytes = random_bytes(16);
var_dump(bin2hex($bytes));


var_dump(random_int(0, 9999));
var_dump(random_int(-1000, 1000));