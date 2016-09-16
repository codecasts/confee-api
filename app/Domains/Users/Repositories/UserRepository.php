<?php

namespace Confee\Domains\Users\Repositories;

use Artesaos\Warehouse\CrudRepository;
use Confee\Domains\Users\Contracts\UserRepository as UserRepositoryContract;
use Confee\Domains\Users\User;

/**
 * Class UserRepository.
 */
class UserRepository extends CrudRepository implements UserRepositoryContract
{
    protected $modelClass = User::class;
}