<?php

namespace Creios\XmlJudge\Component;

/**
 * Class JudgementBuilderTest
 * @package Creios\XmlJudge
 */
class JudgementBuilderTest extends \PHPUnit_Framework_TestCase
{

    public function testBuild()
    {
        $judgement = (new JudgementBuilder())->setPassed(true)->build();
        $this->assertTrue($judgement->hasPassed());

        $judgement = (new JudgementBuilder())->setPassed(false)->build();
        $this->assertFalse($judgement->hasPassed());

    }
}
