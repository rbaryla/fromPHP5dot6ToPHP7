<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 11.11.2016
 * Time: 17:07
 */

namespace rbaryla;


class DefineArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testDefineArray() {
        define('ZWIERZETA',
            ['pies', 'kot', 'ptak']);

        $this->assertEquals(
            'kot',
            ZWIERZETA[1]
        );

    }
}
