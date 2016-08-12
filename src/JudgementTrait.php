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
     * @var Constraint[]
     */
    protected $complied = [];
    /**
     * @var Constraint[]
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
     * @return Constraint[]
     */
    public function getComplied()
    {
        return $this->complied;
    }

    /**
     * @return Constraint[]
     */
    public function getFailed()
    {
        return $this->failed;
    }

}