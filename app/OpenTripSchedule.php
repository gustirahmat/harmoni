<?php

namespace harmoniKarimunJawa;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class OpenTripSchedule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'open_trip_schedules';

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
    protected $fillable = ['nama_trip', 'kuota_trip', 'tanggal_trip', 'lama_trip', 'aktif'];

    public function relatedUser()
    {
        return $this->belongsTo('harmoniKarimunJawa\User', 'user_id');
    }

    public function getTanggalTripAttribute($tanggal_trip) {
        return Carbon::parse($tanggal_trip)->format('d-m-Y');
//        return Carbon::parse($tanggal_trip)->format('l, j F Y');
    }
    
}
