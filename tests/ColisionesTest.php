<?php

use PHPUnit\Framework\TestCase;

require 'colisiones/colisiones.php';

class ColisionesTest extends TestCase {

    public function testCollision1() {
        $this->assertEquals('0 0', robotCollisions('LR'));
    }

    public function testCollision2() {
        $this->assertEquals('1 1', robotCollisions('RL'));
    }

    public function testCollision3() {
        $this->assertEquals('0 0 0', robotCollisions('RRR'));
    }

    public function testCollision4() {
        $this->assertEquals('1 2 1', robotCollisions('RRL'));
    }
}


