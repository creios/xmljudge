<?php

namespace Creios\XmlJudge\Component;

/**
 * Class JudgementBuilder
 * @package Creios\XmlJudge
 */
class JudgementBuilder
{

    use Creios\XmlJudge\Component\JudgementTrait;

    /**
     * @return Judgement
     */
    public function build()
    {
        return new Judgement($this->passed, $this->complied, $this->failed);
    }

    /**
     * @param boolean $passed
     * @return $this
     */
    public function setPassed($passed)
    {
        $this->passed = $passed;
        return $this;
    }

    /**
     * @param ConstraintConclusion $complied
     */
    public function addComplied(ConstraintConclusion $complied)
    {
        $this->complied[] = $complied;
    }

    /**
     * @param ConstraintConclusion $failed
     */
    public function addFailed(ConstraintConclusion $failed)
    {
        $this->failed[] = $failed;
    }

}
