<?php

use PandaFrame\Series;
use PHPUnit\Framework\TestCase;

class SeriesTest extends TestCase {
    public function testMean() {
        $series = new Series([1, 2, 3, 4, 5]);
        $this->assertEquals(3, $series->mean());
    }

    public function testMax() {
        $series = new Series([1, 2, 3, 4, 5]);
        $this->assertEquals(5, $series->max());
    }

    public function testMin() {
        $series = new Series([1, 2, 3, 4, 5]);
        $this->assertEquals(1, $series->min());
    }
}