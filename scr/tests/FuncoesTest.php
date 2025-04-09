<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    public function testIsEvenTrue()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEvenFalse()
    {
        $this->assertFalse(Funcoes::isEven(7));
    }

    public function testFactorialPositive()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialNegative()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    public function testIsPalindromeTrueSimple()
    {
        $this->assertTrue(Funcoes::isPalindrome("arara"));
    }

    public function testIsPalindromeTrueWithSpacesAndCase()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama"));
    }

    public function testIsPalindromeFalse()
    {
        $this->assertFalse(Funcoes::isPalindrome("hello"));
    }

    public function testFahrenheitToCelsiusPositive()
    {
        $this->assertEquals(10, Funcoes::fahrenheitToCelsius(50));
    }

    public function testFahrenheitToCelsiusNegative()
    {
        $this->assertEquals(-17.777777777778, Funcoes::fahrenheitToCelsius(0));
    }

    public function testCalculateDiscountValid()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountZeroPercent()
    {
        $this->assertEquals(100, Funcoes::calculateDiscount(100, 0));
    }

    public function testCalculateDiscountZeroPrice()
    {
        $this->assertEquals(0, Funcoes::calculateDiscount(0, 20));
    }

    public function testCalculateDiscountNegativePrice()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-50, 10);
    }

    public function testCalculateDiscountNegativePercent()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -5);
    }
}
