<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'content_packages_id', 'image'
    ];

    protected $hidden = [
        // 
    ];

    // relations to ContentPackage
    public function content_package()
    {
        return $this->belongsTo(ContentPackage::class, 'content_packages_id', 'id');
    }
}
