<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductStockBalance
 *
 * @property int $id
 * @property int $product_id
 * @property int|null $stock_id
 * @property int|null $stock_balance
 * @property int|null $common_balance
 *
 * @package App\Models
 */

class ProductStockBalance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;
}
