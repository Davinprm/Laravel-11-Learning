<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'article'];

    protected $with = ['author', 'category'];
    // eager loading by default

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
        // one to one relationship between Article model with User model, where each article is associated with one author
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // make local scope 
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when (
            $filters['search'] ?? false,
            // if user req any, make true by using key search n run if stmt
            fn ($query, $search) =>
                    $query->where('slug', 'like', '%' . $search . '%'));

        $query->when (
            $filters['category'] ?? false, 
            fn ($query, $category) =>
                $query->whereHas('category', fn($query) => $query->where('slug', $category))
                // to do query if we has relations between table
        );

        $query->when (
            $filters['author'] ?? false, 
            fn ($query, $author) =>
                $query->whereHas('author', 
                // first param is method relations name (on above, or usually in models folder)
                fn($query) => $query->where('username', $author))
                // author is related to username as it on first param of the where func
        );
    }
}