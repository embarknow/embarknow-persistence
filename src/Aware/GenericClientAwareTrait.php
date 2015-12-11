<?php

namespace EmbarkNow\Persistence\Aware;

/**
 * Persistence generic Client awareness
 */
trait GenericClientAwareTrait
{
    /**
     * @var mixed
     */
    protected $genericClient;

    /**
     * Set a generic Client instance
     * @param  mixed $client
     * @return self
     */
    public function setGenericClient($genericClient)
    {
        if (null === $this->genericClient) {
            $this->genericClient = $genericClient;
        }

        return $this;
    }

    /**
     * Get the generic Client instance
     * @return mixed
     */
    public function getGenericClient()
    {
        return $this->genericClient;
    }
}
