<?php

namespace Confee\Domains\Users\Repositories;

use Confee\Domains\Users\Contracts\Repositories\UserRepository as UserRepositoryContract;
use Confee\Domains\Users\User;
use Confee\Support\Domain\Repository\Repository;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository implements UserRepositoryContract
{
    protected $modelClass = User::class;

    protected function fillModel(Model $model, $data)
    {
        if (array_key_exists('password', $data)) {
            $data['password'] = bcrypt($data['password']);
        }

        parent::fillModel($model, $data);
    }
}