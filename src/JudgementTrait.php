<?php

namespace Creios\XmlJudge;

/**
 * Class JudgementTrait
 * @package Creios\XmlJudge
 */
trait JudgementTrait
{

    /**
     * @var bool
     */
    protected $passed;

    /**
     * @var ConstraintConclusion[]
     */
    protected $complied = [];
    /**
     * @var ConstraintConclusion[]
     */
    protected $failed = [];

    /**
     * @return boolean
     */
    public function hasPassed()
    {
        return $this->passed;
    }

    /**
     * @return ConstraintConclusion[]
     */
    public function getComplied()
    {
        return $this->complied;
    }

    /**
     * @return ConstraintConclusion[]
     */
    public function getFailed()
    {
        return $this->failed;
    }

}