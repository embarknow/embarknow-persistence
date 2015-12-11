<?php

namespace EmbarkNow\Persistence\Aware;

use EmbarkNow\Persistence\GatewayInterface;

/**
 * Persistence Gateway Awareness
 */
interface GatewayAwareInterface
{
    /**
     * Set the Gateway instance
     * @param  GatewayInterface $gateway
     * @return self
     */
    public function setGateway(GatewayInterface $gateway);

    /**
     * Get the Gateway instance
     * @return GatewayInterface
     */
    public function getGateway();
}
