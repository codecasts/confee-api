<?php

namespace Confee\Domains\Users\Contracts;

use Artesaos\Warehouse\Contracts\Operations\CreateRecords;
use Artesaos\Warehouse\Contracts\Operations\DeleteRecords;
use Artesaos\Warehouse\Contracts\Operations\ReadRecords;
use Artesaos\Warehouse\Contracts\Operations\UpdateRecords;
use Artesaos\Warehouse\Contracts\Repository;

/**
 * Interface UserRepository.
 */
interface UserRepository extends Repository,
                                 CreateRecords,
                                 ReadRecords,
                                 UpdateRecords,
                                 DeleteRecords
{
    //
}