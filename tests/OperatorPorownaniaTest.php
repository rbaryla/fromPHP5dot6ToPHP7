<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 11.11.2016
 * Time: 13:29
 */

namespace rbaryla;


class OperatorPorownaniaTest extends \PHPUnit_Framework_TestCase
{
    public function testOperatorPorownania()
    {
        // int
        $this->assertEquals(
            0,
            1 <=> 1
        );

        $this->assertEquals(
            -1,
            1 <=> 2
        );

        $this->assertEquals(
            1,
            2 <=> 1
        );

        // float
        $this->assertEquals(
            0,
            1.5 <=> 1.5
        );

        $this->assertEquals(
            -1,
            1.5 <=> 2.5
        );

        $this->assertEquals(
            1,
            2.5 <=> 1.1
        );

        // string
        $this->assertEquals(
            0,
            'a' <=> 'a'
        );

        $this->assertEquals(
            -1,
            'a' <=> 'b'
        );

        $this->assertEquals(
            1,
            'c' <=> 'a'
        );

        $this->assertEquals(
            1,
            'a' <=> 'A'
        );

        // mix
        $this->assertEquals(
            -1,
            'A' <=> 1
        );

        $uporzArr = [33, 111,  26];

        usort($uporzArr, function($a, $b) {
            return $a <=> $b;
        });

        $this->assertEquals(
            [26, 33, 111],
            $uporzArr
        );

    }

}
