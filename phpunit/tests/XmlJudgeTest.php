<?php

namespace Creios\XmlJudge;

class XmlJudgeTest extends \PHPUnit_Framework_TestCase
{

    public function testJudgeSingleConstraintPassed()
    {
        $xml =
            <<<XML
<message>Hello!</message>
XML;
        $constraint = \Mockery::mock(Constraint::class);
        $constraint->shouldReceive(['evaluate' => $xml])->once()->andReturn([]);
        $judgement = (new XmlJudge([$constraint]))->judge($xml);
        $this->assertTrue($judgement->hasPassed());
        $this->assertEquals(1, count($judgement->getComplied()));
        $this->assertTrue($judgement->getComplied()[0]->hasPassed());
        $this->assertEquals('Mockery_0_Creios_XmlJudge_Constraint', $judgement->getComplied()[0]->getClass());
        $this->assertEquals(0, count($judgement->getFailed()));

    }

    public function testJudgeSingleConstraintNotPassed()
    {
        $xml =
            <<<XML
<message>Hello!</message>
XML;
        $violation = new Violation("Message ist too long", 1);
        $constraint = \Mockery::mock(Constraint::class);
        $constraint->shouldReceive(['evaluate' => $xml])->once()->andReturn([$violation]);
        $judgement = (new XmlJudge([$constraint]))->judge($xml);
        $this->assertFalse($judgement->hasPassed());
        $this->assertEquals(0, count($judgement->getComplied()));
        $this->assertEquals(1, count($judgement->getFailed()));
        $this->assertFalse($judgement->getFailed()[0]->hasPassed());
        $this->assertEquals('Mockery_0_Creios_XmlJudge_Constraint', $judgement->getFailed()[0]->getClass());
        $this->assertEquals($violation, $judgement->getFailed()[0]->getViolations()[0]);
        $this->assertEquals($violation->getError(), $judgement->getFailed()[0]->getViolations()[0]->getError());
        $this->assertEquals($violation->getLine(), $judgement->getFailed()[0]->getViolations()[0]->getLine());

    }
}
