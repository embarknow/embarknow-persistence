<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Entity
 * An Entity takes on the persona of a 'Unit Of Work' meaning that it will handle any changes with the data layer itself.
 * An Entity contains 'Application independent' business rules.
 */
interface EntityInterface
{
    /**
     * Store the Entity into it's respective data layer.
     *
     * @return bool
     */
    public function store();

    /**
     * Update the Entity in it's respective data layer.
     *
     * @return bool
     */
    public function update();

    /**
     * Delete the Entity from it's respective data layer.
     *
     * @return bool
     */
    public function delete();
}
