<?php

namespace harmoniKarimunJawa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimony extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'testimonies';

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
    protected $fillable = ['nama_tamu', 'testimoni', 'tanggal_trip', 'domisili_tamu'];

    public function relatedUser()
    {
        return $this->belongsTo('harmoniKarimunJawa\User', 'user_id');
    }
    
}
