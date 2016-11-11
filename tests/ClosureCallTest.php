<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 11.11.2016
 * Time: 22:23
 */

namespace rbaryla;

class ClosureCallTest extends \PHPUnit_Framework_TestCase
{
    public function testClosureCall()
    {
        $getX = function() {
            return $this->x;
        };

        $this->assertEquals(
            1,
            $getX->call(new A)
        );
    }
}

class A {
    private $x = 1;
}
