<?php
namespace Creios\XmlJudge;

use PHPUnit_Framework_TestCase;

/**
 * Class JudgementTest
 * @package Creios\XmlJudge
 */
class JudgementTest extends PHPUnit_Framework_TestCase
{

    public function testConstruct()
    {
        $judgement = new Judgement(true);
        $this->assertTrue($judgement->hasPassed());

        $judgement = new Judgement(false);
        $this->assertFalse($judgement->hasPassed());
    }
    
}
