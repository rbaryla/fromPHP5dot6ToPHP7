<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 08.11.2016
 * Time: 22:46
 */
declare( strict_types = 0);

namespace rbaryla;


class SkalarneTypyDanychTest extends \PHPUnit_Framework_TestCase
{

    function testSkalarneTypyDanych() {

        $this->assertEquals(
            54.55,
            $this->razem('50.25', 4.3)
        );

        $this->assertEquals(
            55.5,
            $this->razem(50.25)
        );

        $this->assertEquals(
            55.5,
            $this->razem(50.25)
        );

        try {
            $this->razem(50.25, null);
            $this->assertTrue(false);

        } catch (\Throwable $err) {
            $this->assertInstanceOf('TypeError', $err);
        }

        $this->assertEquals(
            50,
            $this->razemToInt(25.5, 25.4)
        );

        $this->assertEquals(
            25,
            $this->razemFromInt(20.99, 5.99)
        );

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

    /**
     * @param float $cena
     * @param float $wysylka
     * @return int
     */
    function razemToInt(float $cena, float $wysylka = 5.25): int
    {
        return $this->razem($cena, $wysylka);
    }

    /**
     * @param int $cena
     * @param int $wysylka
     * @return float
     */
    function razemFromInt(int $cena, int $wysylka = 5): float
    {
        return $cena + $wysylka;
    }


}
