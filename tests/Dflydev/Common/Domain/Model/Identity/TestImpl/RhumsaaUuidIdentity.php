<?php

namespace Dflydev\Common\Domain\Model\Identity\TestImpl;

use Dflydev\Common\Domain\Model\Identity\StringBasedIdentity;

trait RhumsaaUuidIdentity
{
    use StringBasedIdentity;

    public static $testUuid = '91BB7DE6-F03C-4B84-8983-6703F84175DB';

    public static function generate()
    {
        return new static(static::$testUuid);
    }
}
