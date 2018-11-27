<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    public function user()
    {
        // name_id, id
        return $this->belongsToMany('App\Models\User');
        // return $this->belongsToMany('App\Models\User')->withTimeStamp()->withPivot('kolom')->wherePivotIn('kolom', 'nama valuee dalam koloms');
    }

}
