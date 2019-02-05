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

}
