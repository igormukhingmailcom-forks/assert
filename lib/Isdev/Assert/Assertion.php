<?php

namespace Isdev\Assert;

class Assertion
{
    public static function jsonStringMatchJsonString($expected, $actual)
    {
        throw new Exception\AssertionJsonMatchFailedException;
    }
}