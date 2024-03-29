<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with(['product_category', 'product_gallery'])->get();

        $data = [
            'title' => 'PRODUK WISATA',
            'datas' => $products,
        ];

        return view('products', $data);
    }

    public function getById($id)
    {
        $products = Product::with(['product_gallery'])->get()->where('product.id', $id);

        $data = [
            'title' => 'PRODUK WISATA',
            'datas' => $products,
        ];
        return view('products', $data);
    }
    public function getByCategory($category)
    {
        $products = Product::with(['product_category', 'product_gallery'])->get()->where('product_category.category', $category);

        $data = [
            'title' => 'PRODUK WISATA',
            'datas' => $products,
            'category' => $category
        ];
        return view('products', $data);
    }
}
