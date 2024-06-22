<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
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

    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }

    /**
     * Nombre de personne interessé au cours
     * 
     * @return int 
     */
    public function getInterestedUser(): ?int {
        return count($this->users()->get()->toArray()) ?? 0;
    }
}
