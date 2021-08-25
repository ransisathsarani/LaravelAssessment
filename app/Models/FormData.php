<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    /**
     * The table used by the model
     *
     *
     * @var string
     */
    protected $table = 'tbm_form_data';

    /**
     * @var string[]
     */

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s'
    ];

    public function runner()
    {
        return $this->belongsTo('App\Models\Runner', 'runner_id', 'id');
    }

    public function last_runs()
    {
        return $this->hasMany('App\Models\LastRuns', 'runner_id', 'runner_id');
    }

}
