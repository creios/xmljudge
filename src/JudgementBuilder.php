<?php

namespace Creios\XmlJudge;

/**
 * Class JudgementBuilder
 * @package Creios\XmlJudge
 */
class JudgementBuilder
{

    use JudgementTrait;

    /**
     * @return Judgement
     */
    public function build()
    {
        return new Judgement($this->passed);
    }
}