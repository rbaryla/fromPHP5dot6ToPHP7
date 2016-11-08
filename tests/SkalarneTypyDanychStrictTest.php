<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 08.11.2016
 * Time: 22:46
 */
declare( strict_types = 1);

namespace rbaryla;


class SkalarneTypyDanychStrictTest extends \PHPUnit_Framework_TestCase
{

    function testSkalarneTypyDanych() {

        try {
            $this->razem('50.25', 4.3);
            $this->assertTrue(false);

        } catch (\Throwable $err) {
            $this->assertInstanceOf('TypeError', $err);
        }


    }


    /**
     * @param float $cena
     * @param float $wysylka
     * @return float
     */
    function razem(float $cena, float $wysylka = 5.25): float
    {
        return $cena + $wysylka;
    }



}
