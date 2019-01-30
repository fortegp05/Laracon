<?php

use LaravelJpCon\q007\Gengo;
use PHPUnit\Framework\TestCase;

class GengoTest extends TestCase
{
    public function testMeiji()
    {
        $this->assertEquals(Gengo::result_gengo('18680125'), '㍾');
    }

    public function testTaisyo()
    {
        $this->assertEquals(Gengo::result_gengo('19120730'), '㍽');
    }

    public function testSyowa()
    {
        $this->assertEquals(Gengo::result_gengo('19261225'), '㍼');
    }

    public function testHeisei()
    {
        $this->assertEquals(Gengo::result_gengo('19890108'), '㍻');
    }

    public function testNewGengo()
    {
        $this->assertEquals(Gengo::result_gengo('20190501'), '㋿');
    }
}

