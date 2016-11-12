<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 12.11.2016
 * Time: 01:17
 */

function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2()
{
    yield 3;
    yield 4;
}

foreach (gen() as $val)
{
    echo $val, PHP_EOL;
}