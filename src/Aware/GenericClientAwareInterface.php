<?php

namespace EmbarkNow\Persistence\Aware;

/**
 * Persistence generic Client awareness
 */
interface GenericClientAwareInterface
{
    /**
     * Set a generic Client instance
     * @param  mixed $genericClient
     * @return self
     */
    public function setGeneridClient($genericClient);

    /**
     * Get the generic Client instance
     * @return mixed
     */
    public function getGenericClient();
}
