<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Repository
 * A Repository is responsible for fetching and maintaining 'in memory' versions of Entities.
 */
interface RepositoryInterface
{
    /**
     * Fetch a result from a Data Layer
     * @param  array  $filters
     * @param  array  $sorting
     * @param  array  $pagination
     * @return array
     */
    public function fetch(array $filters, array $sorting = [], array $pagination = []);

    /**
     * Get a single result by it's ID
     * @return array
     */
    public function get($id);
}
