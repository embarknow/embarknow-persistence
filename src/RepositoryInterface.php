<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Repository
 * A Repository is responsible for fetching and maintaining 'in memory' versions of Entities. It is where the queries for the gateway layer are generated.
 */
interface RepositoryInterface
{
    /**
     * Fetch a collection of entities using filters.
     *
     * @param array $filters
     * @param array $sorting
     * @param array $pagination
     *
     * @return array
     *
     * @throws \EmbarkNow\Persistence\Exceptions\RepositoryException
     */
    public function fetchEntities(array $filters, array $sorting = [], array $pagination = []);

    /**
     * Get a single result by it's ID.
     *
     * @return array
     *
     * @throws \EmbarkNow\Persistence\Exceptions\RepositoryException
     */
    public function getEntity($id);
}
