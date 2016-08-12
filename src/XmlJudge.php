<?php
namespace Creios\XmlJudge;

use Creios\XmlJudge\Component\ConstraintConclusion;
use Creios\XmlJudge\Component\Judgement;
use Creios\XmlJudge\Component\JudgementBuilder;

class XmlJudge
{
    /** @var Constraint[] */
    private $constraints;

    public function __construct(array $constraints)
    {
        $this->constraints = $constraints;
    }

    /**
     * @param string $xml
     * @return Judgement
     */
    public function judge($xml)
    {
        $judgementBuilder = new JudgementBuilder();

        foreach ($this->constraints as $constraint) {
            $violations = $constraint->evaluate($xml);
            $passed = count($violations) > 0;
            $conclusion = new ConstraintConclusion(
                $passed, get_class($constraint), $violations);
            if ($passed) {
                $judgementBuilder->addComplied($conclusion);
            } else {
                $judgementBuilder->addFailed($conclusion);
            }
        }

        $passed = (count($judgementBuilder->getFailed()) === 0);
        $judgementBuilder->setPassed($passed);

        return $judgementBuilder->build();
    }
}
