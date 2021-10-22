<?php

namespace Php\Package\Tests;

use Exception;
use InvalidArgumentException;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;

use function Php\Package\cube;

require_once(__DIR__. "\..\src\Solution.php");



class SolutionTest extends TestCase {

    public function testCube() {
        $this->assertEquals(1, cube(1));
        $this->assertEquals(8, cube(2));
        $this->assertEquals(27, cube(3));
        $this->assertEquals(1000, cube(10));
    }

    /**
     * @dataProvider additionProvider
     */
    public function testCubeWithDataSet($expected, $arg)
    {
        $this->assertEquals($expected, cube($arg));
    }

    public function additionProvider()
    {
        return [
            [1, 1],
            [8, 2],
            [27,23],
            [-1, -1]
        ];
    }    

    /**
     * Work exception
     * @deprecated (don't work) @expectedException InvalidArgumentException
     */
    public function testExceptionUsingAnnotation()
    {
        //Work
        $this->expectException(InvalidArgumentException::class);

        throw new \InvalidArgumentException("TEST");
        
    }

    public function testExceptionUsingTry() 
    {
        //Перехват ошибки
        $this->expectException(AssertionFailedError::class);
        $this->fail("expected exception"); //Throw
        
    }
}