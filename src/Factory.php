<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\EasyDBHiddenString;

use ParagonIE\EasyDB\Factory as Base;
use ParagonIE\EasyDB\EasyDB;
use ParagonIE\HiddenString\HiddenString;

abstract class Factory extends Base
{
    /**
    * @psalm-param array{0:HiddenString, 1?:HiddenString, 2?:HiddenString, 3?:array} $config
    */
    public static function fromArray(array $config): EasyDB
    {
        $config[0] = $config[0]->getString();
        $config[1] = (($config[1] ?? null) instanceof HiddenString) ? $config[1]->getString() : null;
        $config[2] = (($config[2] ?? null) instanceof HiddenString) ? $config[2]->getString() : null;

        return parent::fromArray($config);
    }
}
