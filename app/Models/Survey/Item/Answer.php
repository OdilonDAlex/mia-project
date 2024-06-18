<?php

namespace App\Models\Survey\Item;

use App\Models\Survey\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['content'] ;

    public function items(): BelongsTo {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
