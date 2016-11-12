<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 12.11.2016
 * Time: 01:08
 */

$gen = (function() {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;