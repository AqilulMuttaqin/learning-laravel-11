<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id',
        'criteria_id'
    ];

    protected $with = [
        'users',
        'categories'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, 
            fn($query, $search) => 
            $query->where('title', 'like', '%' . $search . '%')
        )->when($filters['category'] ?? false, 
            fn($query, $category) => 
            $query->whereHas('categories', 
                fn($query) => $query->where('slug', $category)
            )
        )->when($filters['author'] ?? false,
            fn($query, $author) =>
            $query->whereHas('users',
                fn($query) => $query->where('username', $author)
            )
        );
    }
}
