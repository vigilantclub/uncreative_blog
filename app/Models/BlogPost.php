<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\BlogPostFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    /**
 * Create a new factory instance for the model.
 *
 * @return \Illuminate\Database\Eloquent\Factories\Factory
 */
protected static function newFactory()
{
    return BlogPostFactory::new();
}
}
