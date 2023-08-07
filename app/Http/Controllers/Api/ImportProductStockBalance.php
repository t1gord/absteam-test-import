<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductStockBalance;
use App\Models\Stock;
use Illuminate\Http\Request;

class ImportProductStockBalance extends Controller
{
    public function importStockBalance(Request $request): \stdClass
    {
        $jsonBody = $request->request->all();
        $return = new \stdClass();
        $errors = [];

        if ($jsonBody) {
            foreach ($jsonBody as $id => $item) {
                $productUuid = $item['uuid'] ?? false;

                if ($productUuid) {
                    $product = Product::firstOrCreate(['uuid' => $productUuid]);
                    $stocks = $item['stocks'] ?? false;

                    if ($stocks) {
                        foreach ($stocks as $stock) {
                            $stockUuid = $stock['uuid'] ?? false;
                            $stockQuantity = $stock['quantity'] ?? false;

                            if ($stockUuid and Stock::where('uuid', $stockUuid)->first()) {
                                if ($stockQuantity) {
                                    $productBalance = ProductStockBalance::firstOrCreate([
                                        'product_id' => $product->id,
                                        'stock_id' => $stockUuid
                                    ]);

                                    $productBalance->stock_id = $stockUuid;
                                    $productBalance->stock_balance = $stockQuantity;
                                    $productBalance->save();
                                } else {
                                    $errors[] = "Пустое поле quantity для склада с uuid: $stockUuid у товара с uuid: $productUuid";
                                }

                            } else {
                                if ($stockQuantity) {
                                    $productBalance = ProductStockBalance::firstOrCreate([
                                        'product_id' => $product->id,
                                        'stock_id' => null
                                    ]);
                                    $productBalance->product_id = $product->id;
                                    $productBalance->common_balance = $stockQuantity;
                                    $productBalance->save();
                                } else {
                                    $errors[] = "Пустое поле quantity для склада с uuid: $stockUuid у товара с uuid: $productUuid";
                                }
                            }
                        }
                    } else {
                        $errors[] = 'Пустое поле `stocks` у товара под счетом №' . $id + 1;
                    }
                } else {
                    $errors[] = 'Пустое поле `uuid` у товара под счетом №' . $id + 1;
                }
            }
        } else {
            $errors[] = 'Пустое body запроса';
        }

        if (!empty($errors)) {
            $return->success = false;
        } else {
            $return->success = true;
        }

        $return->errors = $errors;

        return $return;
    }
}
