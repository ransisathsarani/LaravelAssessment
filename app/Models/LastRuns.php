<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastRuns extends Model
{
    /**
     * The table used by the model
     *
     *
     * @var string
     */
    protected $table = 'tbm_form_last_runs';

    /**
     * @var string[]
     */

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s'
    ];



}
