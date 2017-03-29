<?php

namespace Confee\Support\Domain\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    protected $modelClass;

    /**
     * @return Builder
     */
    public function newQuery()
    {
        return app()->make($this->modelClass)->newQuery();
    }

    public function factory(array $data = [])
    {
        $model = $this->newQuery()->getModel()->newInstance();

        $this->fillModel($model, $data);

        return $model;
    }

    protected function fillModel(Model $model, $data)
    {
        $model->fill($data);
    }
}