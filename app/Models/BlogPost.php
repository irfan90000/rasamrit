<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['user_id', 'title', 'slug', 'body', 'thumbnail'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
    public function getShareLinkAttribute()
    {
        return route('blog.show', $this->slug);
    }
}