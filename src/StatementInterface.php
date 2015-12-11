<?php

namespace EmbarkNow\Persistence;

use Countable;
use IteratorAggregate;

/**
 * Persistence Statement
 */
interface StatementInterface extends Countable, IteratorAggregate
{
    /**
     * Execute a prepared statement
     * @param  array $arguments
     * @return boolean
     */
    public function execute(array $arguments = []);

    /**
     * Fetch the next row from a result set returned from execute
     * @param  mixed $arguments Arguments list to pass through to an implementation
     * @return mixed
     */
    public function fetch(...$arguments);

    /**
     * Fetch all results of a set returned from execute
     * @param  mixed $arguments
     * @return array
     */
    public function fetchAll(...$arguments);

    /**
     * Flush any results to allow execute to be called again
     * @return boolean
     */
    public function flush();
}
