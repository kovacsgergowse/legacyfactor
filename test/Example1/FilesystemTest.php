<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.12.11.
 * Time: 18:49
 */


use Example1\Filesystem;


class FilesystemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Filesystem
     */
    private $object;


    /**
     * @var PHPUnit_Framework_MockObject_MockObject
     */
    private $stub;

    public function setUp()
    {
        $this->object = new Filesystem();

        $this->stub = $this->getMockBuilder(Filesystem::class)
            ->setMethods(['globPath'])
            ->getMock();
    }

    public function testLowerCase()
    {
        $this->stub
            ->method('globPath')
            ->willReturn(['Sdlf.asd', 'FHLI.fdf']);

        $this->assertEquals(['sdlf.asd', 'fhli.fdf'], $this->stub->lowerCase(''));
    }
}
