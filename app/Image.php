<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path'];
    
    public function getUrl(){
        return asset($this->path . $this->filename);
    }
}
