<?php

namespace Haemanthus\Basement\Contracts;

use Spatie\LaravelData\DataCollection;

interface AllContact
{
    /**
     * Get all contact list.
     *
     * @return \Spatie\LaravelData\DataCollection
     */
    public function all(): DataCollection;
}