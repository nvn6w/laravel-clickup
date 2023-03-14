<?php

namespace Spinen\ClickUp;

use Spinen\ClickUp\Support\Model;

/**
 * Class TaskTemplate
 *
 * @property string $id
 * @property string $name
 */
class TaskTemplate extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];

    /**
     * Path to API endpoint.
     */
    protected string $path = '/taskTemplate';

    /**
     * Some of the responses have the collections under a property
     */
    protected ?string $responseCollectionKey = 'templates';
}
