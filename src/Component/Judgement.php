<?php

namespace Creios\XmlJudge\Component;

/**
 * Class Judgement
 * @package Creios\XmlJudge
 */
class Judgement
{

    use Creios\XmlJudge\Component\JudgementTrait;

    /**
     * Judgement constructor.
     * @param bool $passed
     * @param ConstraintConclusion[] $complied
     * @param ConstraintConclusion[] $failed
     */
    public function __construct($passed, array $complied, array $failed)
    {
        $this->passed = $passed;
        $this->complied = $complied;
        $this->failed = $failed;
    }

}
