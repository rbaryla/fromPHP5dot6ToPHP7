<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 11.11.2016
 * Time: 12:13
 */

namespace rbaryla;


class OperatorKoalescencyjnyTest extends \PHPUnit_Framework_TestCase
{
    public function testOperatorKoalescencyjny()
    {
        $this->assertEquals(
            'gosc',
            $_GET['user'] ?? $_POST['user'] ?? 'gosc'
        );

        $_GET['user']    = null;
        $_POST['user']   = null;

        $this->assertEquals(
            'gosc',
            $_GET['user'] ?? $_POST['user'] ?? 'gosc'
        );

        unset($_GET['user']);
        $_POST['user']   = 'Adam';

        $this->assertEquals(
            'Adam',
            $_GET['user'] ?? $_POST['user'] ?? 'gosc'
        );

        $_GET['user'] = 'Ewa';

        $this->assertEquals(
            'Ewa',
            $_GET['user'] ?? $_POST['user'] ?? 'gosc'
        );

        $this->assertEquals('Ewa',
            $_GET['user'] ?: 'gosc'
        );

        unset($_GET['user']);

        try {
            $user = $_GET['user'] ?: 'gosc';
            $this->assertTrue(false);
        } catch (\Throwable $err) {
            $this->assertInstanceOf('Throwable', $err);
        }

    }
}