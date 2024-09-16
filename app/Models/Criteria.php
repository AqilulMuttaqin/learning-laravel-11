<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Criteria extends Model
{
    use HasFactory;

    protected $table = 'criterias';

    protected $fillable = [
        'criteria',
        'c_slug',
    ];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'criteria_id');
    }
}
