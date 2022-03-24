<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Свойства
 * @property string $id
 * @property int    $category_id
 * @property int    $image_id
 * @property string $title
 * @property string $description
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * Миграция
 * @see CreateCategoriesTable
 */
class Article extends Model
{
    protected $guarded = [];

}
