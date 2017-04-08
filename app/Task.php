<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    /**
     * A Task can have one Category.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getCategory(){
        return $this->hasOne('App\Category');
    }
}
