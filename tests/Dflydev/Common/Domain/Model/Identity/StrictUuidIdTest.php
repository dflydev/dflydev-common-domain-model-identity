<?php

namespace Dflydev\Common\Domain\Model\Identity;

use Dflydev\Common\Domain\Model\Identity\TestImpl\StrictUuidId;
use InvalidArgumentException;

class StrictUuidIdTest extends AbstractUuidIdTest
{
    /** @test */
    public function it_creates_from_string_that_looks_like_a_uuid()
    {
        $class = $this->getIdentityClass();

        $id = $class::fromString($class::$testUuid);

        $this->assertInstanceOf(Identity::class, $id);
        $this->assertInstanceOf($class, $id);
        $this->assertEquals($class::$testUuid, $id);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_does_not_create_from_string_that_does_not_look_like_a_uuid()
    {
        $class = $this->getIdentityClass();

        $id = $class::fromString('hello world');
    }

    protected function getIdentityClass()
    {
        return StrictUuidId::class;
    }
}
