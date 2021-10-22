<?php 

namespace Hexlet\Phpunit\Tests;

use Exception;
use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\repeat;
use function Hexlet\Phpunit\Utils\reverseString;

class UtilsTest extends TestCase {
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }

    public function testReverse2(): void
    {
        $this->assertTrue(true, "NOT");
        $this->assertFalse(false, "False");
    }
    public function testForArray() {

        // Проверяет количество элементов
        $this->assertNotCount(0, ['foo']);

        // Ожидает пустой массив
        $this->assertEmpty([]);
        $this->assertNotEmpty(['foo']);

        // При сравнении приводит к одному виду
        // В случае массивов сортирует их
        $this->assertEqualsCanonicalizing([1,2],[2,1]);

        // Проверяет что элемент слева входит в массив справа
        $this->assertContains(3, [1,2,3]);
        $this->assertNotContains(4, [1,2,3]);
        
    }

    public function testForString() {

        // Проверяет окончание строки
        $this->assertStringEndsNotWith('suffix', 'foo');
        $this->assertStringEndsWith('su', 'foosu');

        // Проверяет что строка соответствует формату
        // Варианты форматирования указаны в документации PHPUnit
        $this->assertStringNotMatchesFormat('%i', 'foo');
        $this->assertStringMatchesFormat('%i', '123');

        // Проверяет наличие подстроки в строке
        $this->assertStringNotContainsString('foo','bar');
        $this->assertStringContainsString('foo','bfooar');
    }

    public function testSomeCode() : void
    {
        print_r('some output' . "\n");
        $this->expectOutputString('some output');
        print_r('some long output');

        $this->expectOutputRegex('/output/');
        
        // Сюда передается имя класса ожидаемого исключения
        $this->expectException(Exception::class);

        throw new Exception("AAA");
        //$this->expectOutputRegex('output');

    }

    public function testRepeat() {
        $this->assertEquals("$$$", repeat("$", 3));
    }
}