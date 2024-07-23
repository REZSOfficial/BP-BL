<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionSet extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'active_from',
        'active_to',
    ];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
