<?php

namespace EmbarkNow\Persistence\Aware;

/**
 * Persistence generic Client awareness
 */
interface GenericClientAwareInterface
{
    /**
     * Set a generic Client instance
     * @param  mixed $client
     * @return self
     */
    public function setClient($client);

    /**
     * Get the generic Client instance
     * @return mixed
     */
    public function getClient();
}
