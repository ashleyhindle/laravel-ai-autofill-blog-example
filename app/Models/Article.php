<?php

namespace App\Models;

use AshleyHindle\AiAutofill\AiAutofill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Article extends Model
{
    use AiAutofill;

    protected $autofill = [
        'tagline' => 'a super click-baity obnoxious tagline',
        'seo_description',
        'tags' => 'CSV of up to 5 unique lowercase tags using only letters, numbers, and hyphens (i.e. tag-1, tag-2, tag3). Only return the most relevant. You do not need to use all 5.',
    ];

    public function autofillSeoDescription()
    {
        return 'Concise SEO description';
    }

    protected $fillable = [
        'title',
        'content',
        'tagline',
        'seo_description',
        'tags',
    ];
}
