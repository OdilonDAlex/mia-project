<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function reactions(): BelongsToMany {
        return $this->belongsToMany(Reaction::class);
    }

    public function getFullName(): string {
        return $this->name . " " . $this->firstname; 
    }

    public function created_events(): HasMany {
        return $this->hasMany(EventModel::class, 'author_id');
    }

    public function events(): BelongsToMany {
        return $this->belongsToMany(EventModel::class, 'event_model_user', 'user_id', 'event_id');
    }

    public function isAttachedAt(EventModel $event){
        return in_array($this->id, $event->users()->pluck('id')->toArray());
    }
}
