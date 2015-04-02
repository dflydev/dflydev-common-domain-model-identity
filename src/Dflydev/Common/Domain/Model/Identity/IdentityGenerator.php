<?php

namespace Dflydev\Common\Domain\Model\Identity;

interface IdentityGenerator
{
    /**
     * Generate an Identity.
     *
     * @return static
     */
    public static function generate();
}
