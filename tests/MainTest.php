<?php
namespace App;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @covers \App\Main::convert
     */
    public function testIndex(): void
    {
        $main = new Main();
        $this->assertEquals("I", $main->convert(1));
        $this->assertEquals("V", $main->convert(5));
        $this->assertEquals("X", $main->convert(10));
        $this->assertEquals("L", $main->convert(50));
        $this->assertEquals("C", $main->convert(100));
        $this->assertEquals("D", $main->convert(500));
        $this->assertEquals("M", $main->convert(1000));
        $this->assertEquals(false, $main->convert(6));

		$this->assertEquals('V', $main->parse(5));
//		$this->assertEquals('IV', $main->parse(4));
//		$this->assertEquals('VI', $main->parse(6));
//		$this->assertEquals('V', $main->parse(5));
		$this->assertEquals(10, $main->findClosesLow(14));
		$this->assertEquals(10, $main->findClosesLow(10));
		$this->assertEquals([], $main->getArray(2587));
//		$this->assertEquals('V', $main->parse(5));
//		$this->assertEquals('V', $main->parse(5));


//
//		$this->assertEquals(5, $main->findClosestHigh(4));
//		$this->assertEquals(10, $main->findClosestHigh(9));
//		$this->assertEquals(100, $main->findClosestHigh(60));
//		$this->assertEquals(100, $main->findClosestHigh(70));
//
//		$this->assertEquals("I", $main->parse(144));




//        $this->assertEquals([1,5], $main->getArray(4));
//        $this->assertEquals([1,1,1], $main->getArray(3));

    }

}
