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
     * @return boolean
     */
    public function hasPassed()
    {
        return $this->passed;
    }

}