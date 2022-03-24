<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Свойства
 * @property string $id
 * @property string $name
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * Миграция
 * @see CreateCategoriesTable
 */
class Category extends Model
{
    protected $guarded = [];


}
