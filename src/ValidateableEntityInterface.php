<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Validateable Entity
 */
interface ValidateableEntityInterface
{
    /**
     * Validate the Entity against a stored set of rules
     * @return boolean
     */
    public function validate();
}
