<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'date' => 'datetime', 
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function (Event $event) {
            $event->slug = Str::slug($event->title);
        });

        static::updating(function (Event $event) {
            $event->slug = Str::slug($event->title);
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
