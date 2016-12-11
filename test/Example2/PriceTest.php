<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.12.11.
 * Time: 19:49
 */

namespace Test\Example2;

use Example2\Price;


class PriceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $stub;

    public function setUp()
    {
        $this->stub = $this->getMockBuilder(Price::class)
            ->setMethods(['getTaxRate'])
            ->getMock();
    }

    public function testCalculateGross()
    {
        $this->stub
            ->method('getTaxRate')
            ->willReturn(27);

        $this->assertEquals(127, $this->stub->calculateGross(100));
    }
}
