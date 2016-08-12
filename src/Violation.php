<?php
namespace Creios\XmlJudge;

class Violation
{
    /** @var string */
    private $error;
    /** @var int|null */
    private $line;

    /**
     * @param string $error
     * @param int|null $line
     */
    public function __construct($error, $line = null)
    {
        $this->error = $error;
        $this->line = $line;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return int|null
     */
    public function getLine()
    {
        return $this->line;
    }
}
