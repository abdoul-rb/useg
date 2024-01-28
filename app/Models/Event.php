<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
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

    public function getFeaturedImageAttribue()
    {
        return str_starts_with($this->featured_image, 'http') 
            ? $this->featured_image 
            : Storage::disk('public')->url($this->featured_image);
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
