<?php

namespace imond;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [ 'title',
                            'featured_img',
                            'author',
                            'category',
                            'content',
                            'meta_data',
                            'slug',
                            'published'
                          ];
}
