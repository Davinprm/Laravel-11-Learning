<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'article'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
        // one to one relationship between Article model with User model, where each article is associated with one author
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}