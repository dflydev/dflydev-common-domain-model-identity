<?php

namespace Dflydev\Common\Domain\Model\Identity;

trait FlexibleFromString
{
    abstract protected function __construct($id);

    /**
     * Create an Identity from a string.
     *
     * @param $string
     * @return static
     */
    public static function fromString($string)
    {
        return new static($string);
    }
}
