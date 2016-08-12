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
     */
    public function __construct($passed)
    {
        $this->passed = $passed;
    }

}