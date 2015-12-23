<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Validatable Entity.
 */
interface ValidatableEntityInterface
{
    /**
     * Validate the Entity against a stored set of rules.
     *
     * @return bool
     */
    public function validate();
}
