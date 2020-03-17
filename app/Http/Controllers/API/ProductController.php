<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $slug = $request->input('slug');
        $type = $request->input('type');
        $price_form = $request->input('price_form');
        $price_to = $request->input('price_to');

        if($id)
        {
            $product = Product::with('galleries')->find($id);

            if($product)
                return ResponseFormatter::success($product, 'Data Kamar berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data Kamar tidak ada', 404);
        }

        if($slug)
        {
            $product = Product::with('galleries')->where('slug', $slug)->first();

            if($product)
                return ResponseFormatter::success($product, 'Data Kamar berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data Kamar tidak ada', 404);
        }

        $product = Product::with('galleries');

        if($name)
            $product->where('name', 'like', '%' . $name . '%');

        if($type)
            $product->where('type', 'like', '%' . $type . '%');

        if($price_form)
            $product->where('price', '≥', $price_form);

        if($price_to)
            $product->where('price', '≤', $price_to);

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list kamar berhasil diambil'
        );

    }
}
