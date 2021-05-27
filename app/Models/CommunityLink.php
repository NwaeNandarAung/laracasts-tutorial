<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\CommunityLinkAlreadySubmitted;

class CommunityLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id', 'title', 'link'
    ];

    public static function from(User $user)
    {
        $link =new static;
        $link->user_id = $user->id;

        if($user->isTrusted()) {
            $link->approve();
        }
        return $link;
    }

    public function contribute($attributes, $caller)
    {
        if($existing = $this->hasBeenAlreadySubmitted($attributes['link']))
        {
            $existing->touch();

            throw new CommunityLinkAlreadySubmitted;
        }
    }

    public function scopeForChannel($builder, $channel)
    {
        if($channel) {
            return $builder->where('channel_id', $channel->id);
        }

        return $builder;
    }

    public function approve()
    {
        $this->approved = true;

        return $this;
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    protected function hasBeenAlreadySubmitted($link)
    {
        return static::where('link',$link)->first();
    }
}
