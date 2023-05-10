<?php

declare(strict_types=1);

namespace ue555\nengo;

use PHPUnit\Framework\TestCase;

final class JapaneseNengoGeneratorTest extends TestCase
{
    public function testToWareki_case1()
    {
        $wareki_case1 = [
            'wareki' => '令和',
            'year' => '03',
            'month' => '12',
            'day' => '12'
        ];
        $japanese_nengo_generator = new JapaneseNengoGenerator();
        $this->assertSame($japanese_nengo_generator->to_wareki('20211212'), $wareki_case1);
    }

    public function testToSeirekii_case1()
    {
        $seireki_case1 = [
            'year' => '2019',
            'month' => '12',
            'day' => '12'
        ];
        $japanese_nengo_generator = new JapaneseNengoGenerator();
        $this->assertSame($japanese_nengo_generator->to_seireki('令和元年12月12日'), $seireki_case1);
    }

    public function testToWareki_case2()
    {
        $wareki_case2 = [
            'wareki' => '平成',
            'year' => '元年',
            'month' => '12',
            'day' => '12'
        ];
        $japanese_nengo_generator = new JapaneseNengoGenerator();
        $this->assertSame($japanese_nengo_generator->to_wareki('19891212'), $wareki_case2);
    }

    public function testToSeirekii_case2()
    {
        $seireki_case2 = [
            'year' => '1989',
            'month' => '12',
            'day' => '12'
        ];
        $japanese_nengo_generator = new JapaneseNengoGenerator();
        $this->assertSame($japanese_nengo_generator->to_seireki('平成元年12月12日'), $seireki_case2);
    }
}
