<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\EasyDBHiddenString\Tests;

use ParagonIE\EasyDB\EasyDB;
use ParagonIE\EasyDB\Tests\FactoryTest as Base;
use ParagonIE\HiddenString\HiddenString;
use SignpostMarv\EasyDBHiddenString\Factory;

class FactoryTest extends Base
{
    public function testFactoryCreate()
    {
        $this->assertInstanceOf(
            EasyDB::class,
            Factory::fromArray([
                new HiddenString('sqlite::memory:'),
            ])
        );
    }
}
