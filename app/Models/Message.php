<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    // public $table = 'messages';
    protected $fillable = ['sender_id', 'receiver_id', 'text'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function getTimeAttribute(): string {
        return date(
            "d M Y, H:i:s",
            strtotime($this->attributes['created_at'])
        );
    }
}

