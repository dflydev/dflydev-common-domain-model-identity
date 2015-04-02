<?php

namespace Dflydev\Common\Domain\Model\Identity;

interface Identity
{
    /**
     * Create an Identity from a string.
     *
     * @param $string
     * @return static
     */
    public static function fromString($string);

    /**
     * @return string
     */
    public function __toString();

    /**
     * @param mixed $other
     * @return bool
     */
    public function equals($other = null);
}
