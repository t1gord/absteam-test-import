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
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance whereCommonBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance whereStockBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStockBalance whereStockId($value)
 * @mixin \Eloquent
 */

class ProductStockBalance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;
}
