<?php
namespace Creios\XmlJudge\Component;

use Creios\XmlJudge\Violation;

class ConstraintConclusion
{
    /** @var bool */
    private $passed;
    /** @var string */
    private $class;
    /** @var Violation[] */
    private $violations;

    /**
     * @param bool $passed
     * @param string $class
     * @param Violation[] $violations
     */
    public function __construct($passed, $class, array $violations)
    {
        $this->passed = $passed;
        $this->class = $class;
        $this->violations = $violations;
    }

    /**
     * @return bool
     */
    public function hasPassed()
    {
        return $this->passed;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return Violation[]
     */
    public function getViolations()
    {
        return $this->violations;
    }
}
