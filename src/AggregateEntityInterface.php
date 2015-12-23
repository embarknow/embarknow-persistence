<?php

namespace EmbarkNow\Persistence;

/**
 * Persistence Aggregate Entity
 * An Agrregated Entity contains interior Entities, and is knowledgable that it must perform operations on its children when those operations are performed on itself.
 */
interface AggregateEntityInterface extends EntityInterface
{
}
