<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Entity
 * An Entity takes on the persona of a 'Unit Of Work' meaning that it will handle any changes with the data layer itself.
 */
interface EntityInterface
{
    /**
     * Store the Entity into it's respective data layer
     * @return boolean
     */
    public function store();

    /**
     * Update the Entity in it's respective data layer
     * @return boolean
     */
    public function update();

    /**
     * Delete the Entity from it's respective data layer
     * @return boolean
     */
    public function delete();
}
