<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Gateway
 * A Gateway is responsible for directly interfacing with a database, filesystem, or other persistence client
 */
interface GatewayInterface
{
    /**
     * Create a record in a data layer with the provided fields
     * @param  array  $fields
     * @param  string $store
     * @return int
     * @throws GatewayException
     */
    public function create(array $fields, $store);

    /**
     * Retrieve data from a data layer
     * @param  array  $filters
     * @param  string $store
     * @param  array  $fields Optional
     * @return array
     * @throws GatewayException
     */
    public function retrieve(array $filters, $store, array $fields = []);

    /**
     * Update a record in the data layer
     * @param  array  $fields
     * @param  array  $filters
     * @param  string $store
     * @return boolean
     * @throws GatewayException
     */
    public function update(array $fields, array $filters, $store);

    /**
     * Delete records in the data layer
     * @param  array  $filters
     * @param  string $store
     * @return boolean
     * @throws GatewayException
     */
    public function delete(array $filters, $store);

    /**
     * Execute an arbitrary statement in the data layer
     * @param  string $statement
     * @return boolean
     * @throws GatewayException
     */
    public function execute($statement);
}
