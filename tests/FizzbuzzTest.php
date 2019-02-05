<?php

class FizzbuzzTest extends \PHPUnit\Framework\TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Fizzbuzz();
    }

    /**
     * @test
     */
    public function oneMustReturnOne()
    {
        $this->assertEquals(1, $this->sut->convert(1));
    }

    /**
     * @test
     */
    public function twoMustReturnTwo()
    {
        $this->assertEquals(2, $this->sut->convert(2));
    }

    /**
     * @test
     */
    public function threeMustReturnFizz()
    {
        $this->assertEquals('Fizz', $this->sut->convert(3));
    }

    /**
     * @test
     */
    public function multipleOfThreeMustReturnFizz()
    {
        $this->assertEquals('Fizz', $this->sut->convert(6));
    }

    /**
     * @test
     */
    public function passingStringMustThrowException()
    {
        $this->expectException(TypeError::class);
        $this->sut->convert('hello world');
    }

    /**
     * @test
     */
    public function negativeNumberMustThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->sut->convert(-1);
    }
}
