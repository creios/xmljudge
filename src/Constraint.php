<?php
namespace Creios\XmlJudge;

interface Constraint
{
    /**
     * @param $xml
     * @return Violation[]
     */
    public function evaluate($xml);
}
