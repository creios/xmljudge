# XmlJudge - I am the law

[![Build Status](https://travis-ci.org/creios/xmljudge.svg?branch=master)](https://travis-ci.org/creios/xmljudge)
[![Coverage Status](https://coveralls.io/repos/github/creios/xmljudge/badge.svg?branch=master)](https://coveralls.io/github/creios/xmljudge?branch=master)
[![GitHub license](https://img.shields.io/github/license/creios/xmljudge.svg)]()

**XmlJudge** is a high level validation of XML files

```php
<?php

use Creios\XmlJudge\Violation;
use Creios\XmlJudge\XmlJudge;

class LengthConstraint implements \Creios\XmlJudge\Constraint
{
    public function evaluate($xml)
    {
        if (strlen($xml) > 1000) {
            return [new Violation("XML file too long")];
        } else {
            return [];
        }
    }
}

$xmlJudge = new XmlJudge([new LengthConstraint()]);
$judgement = $xmlJudge->judge(file_get_contents('example.xml'));
if ($judgement->hasPassed()){
    echo "OK\n";
} else {
    echo "Errors\n";
    foreach ($judgement->getFailed() as $constraintConclusion) {
        echo "  Constraint {$constraintConclusion->getClass()}\n";
        foreach ($constraintConclusion->getViolations() as $violation) {
            echo "    {$violation->getError()}\n";
        }
    }
}
```
