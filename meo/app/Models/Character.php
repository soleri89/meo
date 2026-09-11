<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'pronouns',
        'identity',
        'sexuality',
        'romantic_orientation',
        'personality',
        'likes',
        'dislikes',
        'skills',
        'lore',
        'image_path',
        'status',
        'mood',
        'energy',
        'dream_state',
        'signal',
        'nickname',
        'title',
    ];

    protected $casts = [
        'likes' => 'array',
        'dislikes' => 'array',
        'skills' => 'array',
        'lore' => 'array',
    ];

    public static function ensureDefault(): self
    {
        $character = static::query()->first();

        if ($character) {
            return $character;
        }

        return static::query()->create([
            'name' => 'Yoshiro Ming Hiroshima',
            'age' => 16,
            'pronouns' => 'He/Him • They/Them • She/Her',
            'identity' => 'Demi-boy / partially flexible',
            'sexuality' => 'Omnisexual',
            'romantic_orientation' => 'Aromantic',
            'personality' => 'Extroverted, joyful, spontaneous, honest, kind, playful, energetic, protective, adaptable.',
            'likes' => [
                'Sweet foods',
                'Spicy foods',
                'Loud music',
                'Helping others',
                'Trusted friends',
                'Colorful things',
                'Physical activity',
                'Cute details',
            ],
            'dislikes' => [
                'Dirt',
                'Excessive disorder',
                'Unpleasant things',
                'Unjustified aggression',
                'People deliberately hurting others',
            ],
            'skills' => [
                'Kickboxing',
                'Muay Thai',
                'Karate',
                'Dynamic close-range movement',
                'Leg-based striking and evasion',
            ],
            'lore' => [
                'MEMORY FILE',
                'STATUS: PARTIAL',
                'ARCHIVE: DREAM SIGNAL',
                'SUBJECT: MING',
            ],
            'status' => 'ONLINE',
            'mood' => 'HAPPY',
            'energy' => 'HIGH',
            'dream_state' => 'ACTIVE',
            'signal' => 'STABLE',
            'nickname' => 'MING',
            'title' => 'DREAMER',
        ]);
    }
}
