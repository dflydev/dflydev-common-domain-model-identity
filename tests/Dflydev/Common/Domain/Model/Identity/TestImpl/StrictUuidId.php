<?php

namespace Dflydev\Common\Domain\Model\Identity\TestImpl;

use Dflydev\Common\Domain\Model\Identity\Identity;
use Dflydev\Common\Domain\Model\Identity\IdentityGenerator;
use Dflydev\Common\Domain\Model\Identity\StrictUuidFromString;

class StrictUuidId implements Identity, IdentityGenerator
{
    use RhumsaaUuidIdentity;
    use StrictUuidFromString;
}
