<?php

namespace EmbarkNow\Persistence\Aware;

/**
 * Persistence Entity Validator awareness
 */
trait ValidatorAwareTrait
{
    /**
     * @var mixed
     */
    protected $validator;

    /**
     * Set a validator instance. The type is not concrete
     * @param mixed $validator
     * @return self
     */
    public function setValidator($validator)
    {
        if (null === $this->validator) {
            $this->validator = $validator;
        }

        return $this;
    }

    /**
     * Get the validator instance
     * @return mixed
     */
    public function getValidator()
    {
        return $this->validator;
    }
}
