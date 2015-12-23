<?php

namespace EmbarkNow\Persistence;

use EmbarkNow\ManifoldFactory\FactoryInterface;

/**
 * Persistence Entity Factory.
 */
interface EntityFactoryInterface extends FactoryInterface
{
    /**
     * Make an instance of an Entity.
     *
     * @param array $data
     *
     * @return EntityInterface
     */
    public function makeEntity(array $data);
}
