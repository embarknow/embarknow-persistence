<?php

namespace EmbarkNow\Persistence;

use Iterator;
use Countable;

/**
 * Persistence Result Iterator
 */
interface ResultIteratorInterface extends Iterator, Countable
{
    /**
     * Process each record into a callback function
     * @param  callable $callback
     * @param  array    $arguments
     * @return void
     */
    public function each(callable $callback, array $arguments = []);
}
