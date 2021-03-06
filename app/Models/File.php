<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model 
{

    protected $table = 'files';
    public $timestamps = true;
    protected $fillable = array('url','user_id','file_type_id');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function folders()
    {
        return $this->belongsToMany('App\Models\Folder')->withPivot('folder_id');;
    }

    public function file_type()
    {
        return $this->belongsTo('App\Models\FileType');
    }
}