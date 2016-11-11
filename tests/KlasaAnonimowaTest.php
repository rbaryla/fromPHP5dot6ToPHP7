<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 11.11.2016
 * Time: 15:20
 */

namespace rbaryla;


class KlasaAnonimowaTest extends \PHPUnit_Framework_TestCase
{
    public function testKlasaAnonimowa() {

        $app = new class {
            public function toH1(string $val): string
            {
                return "<h1>$val</h1>";
            }
        };

        $this->assertEquals(
            '<h1>ABC</h1>',
            $app->toH1('ABC')
        );
    }
}
