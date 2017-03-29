<?php

namespace Confee\Domains\Conferences;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    /**
     * @var string
     */
    protected $table = 'editions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'conference_id', 'name', 'venue', 'start_date',
    ];

    public function conference()
    {
        $this->belongsTo(Conference::class, 'conference_id');
    }
}
