<?php

namespace Dflydev\Common\Domain\Model\Identity;

trait StringBasedIdentity
{
    use Equality;

    /**
     * @var string
     */
    private $id;

    protected function __construct($id)
    {
        $this->id = $id;
    }

    protected function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->id;
    }
}
