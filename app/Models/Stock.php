<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Stock
 *
 * @property int $id
 * @property string $name
 * @property int $uuid
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereUuid($value)
 * @mixin \Eloquent
 */

class Stock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

}
