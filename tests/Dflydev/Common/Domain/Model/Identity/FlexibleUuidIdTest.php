<?php

namespace Dflydev\Common\Domain\Model\Identity;

use Dflydev\Common\Domain\Model\Identity\TestImpl\FlexibleUuidId;

class FlexibleUuidIdTest extends AbstractUuidIdTest
{
    /**
     * @test
     * @dataProvider provide_it_creates_from_non_uuid_string_data
     * @param $inputString
     */
    public function it_creates_from_non_uuid_string($inputString)
    {
        $class = $this->getIdentityClass();

        $id = $class::fromString($inputString);

        $this->assertInstanceOf(Identity::class, $id);
        $this->assertInstanceOf($class, $id);
        $this->assertEquals((string) $inputString, $id);
    }

    public function provide_it_creates_from_non_uuid_string_data()
    {
        return [
            ['hello'],
            [1],
            [5],
            ['something very very very very very long (ish) [also it has weird characters in it]'],
        ];
    }

    protected function getIdentityClass()
    {
        return FlexibleUuidId::class;
    }
}
