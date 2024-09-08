<?php

namespace App\Models;

use AshleyHindle\AiAutofill\AiAutofill;
use Illuminate\Database\Eloquent\Model;

class MeetingNote extends Model
{
    use AiAutofill;

    protected $autofill = [
        'summary' => 'executive summary',
        'action_items' => 'Flat JSON array of action items (e.g. ["Item 1", "Item 2", "Item 3"])'
    ];

    protected $fillable = [
        'title',
        'content',
        'summary',
        'action_items'
    ];

    protected $casts = [
        'action_items' => 'array',
    ];
}
