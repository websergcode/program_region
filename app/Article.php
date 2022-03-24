<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Свойства
 * @property string     $id
 * @property int        $category_id
 * @property int        $image_id
 * @property string     $title
 * @property string     $description
 * @property Carbon     $updated_at
 * @property Carbon     $created_at
 * Связи
 * @property Image      $image
 * @property Category   $category
 * Миграция
 * @see CreateArticlesTable
 */
class Article extends Model
{
    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
