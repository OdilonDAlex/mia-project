<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'at'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'author_id');
    } 
}
