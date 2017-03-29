<?php

namespace Confee\Domains\Conferences;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    /**
     * @var string
     */
    protected $table = 'conferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'responsible_id',
    ];

    public function editions()
    {
        return $this->hasMany(Edition::class, 'conference_id');
    }
}
