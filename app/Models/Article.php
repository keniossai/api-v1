<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HasAuthor, ModelHelpers;

    protected $table = "articles";

    protected $fillable = ['title', 'slug', 'body', 'author_id'];
}
