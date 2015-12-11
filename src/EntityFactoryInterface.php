<?php

namespace EmbarkNow\Persistence;

use EmbarkNow\Persistence\EntityInterface;

/**
 * Persistence Entity Factory
 */
interface EntityFactoryInterface
{
    /**
     * Make an instance of an Entity
     * @param  array  $data
     * @param  array  $ctorArgs
     * @param  array  $postMethods
     * @return EntityInterface
     */
    public function make(array $data, array $ctorArgs = [], array $postMethods = []);
}
