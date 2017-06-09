<?php

namespace Functional;

use Functional\Exceptions\InvalidArgumentException;

/**
 * Invoke a callback on a value if the expression is true otherwise return value
 *
 * @param bool $expression
 * @param mixed $value
 * @param callable $callback
 * @return mixed
 */
function with_if(bool $expression, $value, callable $callback)
{
    InvalidArgumentException::assertCallback($callback, __FUNCTION__, 2);

    return $expression ? $callback($value) : $value;
}
