<?php

use Msz\Support\Arr;

class ArrTest extends PHPUnit_Framework_TestCase
{
    public function testValue()
    {
        $this->assertEquals(
            Arr::value('string'),
            'string',
            'value string error'
        );

        $this->assertEquals(
            Arr::value(function() { return 'string'; }),
            'string',
            'value closure error'
        );
    }
}
