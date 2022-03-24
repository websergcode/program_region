<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Свойства
 * @property string $id
 * @property string $url
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * Миграция
 * @see CreateImagesTable
 */
class Image extends Model
{
    protected $guarded = [];
}
