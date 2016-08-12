<?php

namespace Creios\XmlJudge\Component;

class Judgement
{

    use JudgementTrait;

    /**
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
