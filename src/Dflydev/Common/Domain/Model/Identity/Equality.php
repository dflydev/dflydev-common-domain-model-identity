<?php

namespace Dflydev\Common\Domain\Model\Identity;

trait Equality
{
    public function equals($other = null)
    {
        if (is_null($other)) {
            return false;
        }

        if (! $other instanceof $this) {
            return false;
        }

        return (string) $other === (string) $this;
    }
}
