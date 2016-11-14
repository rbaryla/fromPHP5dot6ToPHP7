<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 13.11.2016
 * Time: 00:55
 */

class Foo {

    private $index = 0;

    public function getIndex(): int
    {
        return $this->index;
    }

    public function bar()
    {
        $this->index++;
        return $this->getIndex();
    }
}

$foo = new Foo;

echo $foo->getIndex(), PHP_EOL;    // 0

echo (clone $foo)->bar(), PHP_EOL; // 1

echo $foo->getIndex(), PHP_EOL;    // 0