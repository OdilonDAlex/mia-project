<?php

namespace App\Models;

use App\Models\Survey\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'result_path'
    ];

    public function items(): HasMany {
        return $this->hasMany(Item::class, 'survey_id');
    }
    
    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
