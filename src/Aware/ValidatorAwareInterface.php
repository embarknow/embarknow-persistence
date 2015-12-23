<?php

namespace EmbarkNow\Persistence\Aware;

/**
 * Persistence Entity Validator awareness.
 */
interface ValidatorAwareInterface
{
    /**
     * Set a validator instance. The type is not concrete.
     *
     * @param mixed $validator
     *
     * @return self
     */
    public function setValidator($validator);

    /**
     * Get the validator instance.
     *
     * @return mixed
     */
    public function getValidator();
}
