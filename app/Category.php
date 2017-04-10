<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getTask(){
        return $this->hasMany('App\Task', 'category_id', 'id');
    }
}
