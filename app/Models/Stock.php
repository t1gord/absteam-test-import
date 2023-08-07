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
 *
 * @package App\Models
 */

class Stock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

}
