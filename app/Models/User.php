<?php

namespace App\Models;

use AshleyHindle\AiAutofill\AiAutofill;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use AiAutofill;

    protected $autofill = [
        'favourite_cheese' =>
        'one word made from the letters in the user\'s name without reusing letters. Return the singular word only',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'favourite_cheese',
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
}
