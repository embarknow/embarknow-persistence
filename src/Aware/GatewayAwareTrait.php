<?php

namespace EmbarkNow\Persistence\Aware;

use EmbarkNow\Persistence\GatewayInterface;

/**
 * Persistence Gateway Awareness
 */
trait GatewayAwareTrait
{
    /**
     * @var GatewayInterface
     */
    protected $gateway;

    /**
     * Set the Gateway instance
     * @param  GatewayInterface $gateway
     * @return self
     */
    public function setGateway(GatewayInterface $gateway)
    {
        if (null !== $this->gateway) {
            $this->gateway = $gateway;
        }

        return $this;
    }

    /**
     * Get the Gateway instance
     * @return GatewayInterface
     */
    public function getGateway()
    {
        return $this->gateway;
    }
}
