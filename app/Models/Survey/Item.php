<?php

namespace App\Models\Survey;

use App\Models\Survey;
use App\Models\Survey\Item\Answer;
use App\Models\Survey\Item\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'answers_type'
    ];

    public function question(): HasOne{
        return $this->hasOne(Question::class, 'item_id');
    }

    public function answers(): HasMany {
        return $this->hasMany(Answer::class, 'item_id');
    }

    public function survey(): BelongsTo{
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
