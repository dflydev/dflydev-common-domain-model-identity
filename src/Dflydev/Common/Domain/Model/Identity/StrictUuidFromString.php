<?php

namespace Dflydev\Common\Domain\Model\Identity;

trait StrictUuidFromString
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
        static::guardUuid($string);

        return new static($string);
    }

    private static function guardUuid($string)
    {
        $pattern = '/^[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}$/i';
        if (!preg_match($pattern, $string)) {
            throw new \InvalidArgumentException("UUID of the form nnnnnnnn-nnnn-nnnn-nnnn-nnnnnnnnnnnn expected");
        }
    }
}
