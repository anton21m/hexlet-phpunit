<?php

namespace Php\Package\Tests;

use Exception;
use PHPUnit\Framework\TestCase;



use function Stack\make;

require_once(__DIR__ . "/../src/Stack.php");

use Stack;

class StackTest extends TestCase {

  protected $stack;

  protected function setUp() : void
  {
      $this->stack = [];
  }

  public function testEmpty()
  {
      $this->assertTrue(empty($this->stack));
  }

  public function testPush()
  {
      array_push($this->stack, 'foo');
      $this->assertEquals('foo', $this->stack[count($this->stack) - 1]);
      $this->assertFalse(empty($this->stack));
  }
  
  /* new tests * */



  public function testMainFlow() : void
  {
      $stack = Stack\make();

      // Добавляем два элемента в стек и затем извлекаем их
      Stack\push($stack, 'one');
      Stack\push($stack, 'two');

      $value1 = Stack\pop($stack);
      $this->assertEquals('two', $value1);
      $value2 = Stack\pop($stack);
      $this->assertEquals('one', $value2);

  }

  public function testIsEmpty() : void
  {
      $stack = Stack\make();
      $this->assertTrue(Stack\isEmpty($stack));
      Stack\push($stack, 'one');
      $this->assertFalse(Stack\isEmpty($stack));
      Stack\pop($stack);
      $this->assertTrue(Stack\isEmpty($stack));
  }

  public function testPop() : void 
  {
      // Ожидание ставится до вызова кода
      $this->expectException(Exception::class);

      $stack = Stack\make();
      Stack\pop($stack); // Boom!
  }

    


    

    
}