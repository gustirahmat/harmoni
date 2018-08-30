<?php

namespace harmoniKarimunJawa;

use Illuminate\Database\Eloquent\Model;

class BoatSchedule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boat_schedules';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hari', 'nama_kapal', 'lokasi_pelabuhan', 'menuju_karimunjawa', 'dari_karimunjawa'];

    public function relatedUser()
    {
        return $this->belongsTo('harmoniKarimunJawa\User');
    }
    
}
