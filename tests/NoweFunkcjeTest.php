<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 12.11.2016
 * Time: 01:42
 */

namespace rbaryla;


class NoweFunkcjeTest extends \PHPUnit_Framework_TestCase
{
    public function testIntDiv() {

        $this->assertEquals(
            3,
            intdiv(10, 3)
        );
    }
}
