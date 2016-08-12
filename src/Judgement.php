<?php

namespace Creios\XmlJudge;

/**
 * Class Judgement
 * @package Creios\XmlJudge
 */
class Judgement
{

    use JudgementTrait;

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