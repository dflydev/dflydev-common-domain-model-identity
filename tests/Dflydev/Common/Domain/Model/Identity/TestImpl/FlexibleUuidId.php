<?php

namespace Dflydev\Common\Domain\Model\Identity\TestImpl;

use Dflydev\Common\Domain\Model\Identity\FlexibleFromString;
use Dflydev\Common\Domain\Model\Identity\Identity;
use Dflydev\Common\Domain\Model\Identity\IdentityGenerator;

class FlexibleUuidId implements Identity, IdentityGenerator
{
    use RhumsaaUuidIdentity;
    use FlexibleFromString;
}
