<?php

namespace App\Models;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Tag;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
    ];

    protected $casts = [
        'status' => StatusEnum::class
    ];

    public function Category(): BelongsTo
    {

        return $this->belongsTo(Category::class);
    }

    function Tags(){
        return $this->belongsToMany(Tag::class);
    }
}
