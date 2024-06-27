<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
        // one to one relationship between Category model with Article model, where each category is associated with many article
        // second param is to tell that we have changed foreign key name to another, not users_id (def)
    }
}
