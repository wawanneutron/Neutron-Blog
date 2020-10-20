<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'title_content', 'writer', 'date_writer',
        'category', 'slug', 'content', 'about_writer'
    ];

    protected $hidden = [
        // 
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'content_packages_id', 'id');
    }
}
