<?php

namespace Dflydev\Common\Domain\Model\Identity;

use Dflydev\Common\Domain\Model\Identity\TestImpl\FlexibleUuidId;

abstract class AbstractUuidIdTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_generates_expected_identity()
    {
        $class = $this->getIdentityClass();

        $id = $class::generate();

        $this->assertInstanceOf(Identity::class, $id);
        $this->assertInstanceOf($class, $id);
        $this->assertEquals($class::$testUuid, $id);
    }

    abstract protected function getIdentityClass();
}
