<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $data['texts'] = Helper::getTexts('products');

    return view('pages.products.index', compact('data'));
  }

  public function show($slug)
  {
    $data['texts'] = Helper::getTexts('products.show');
    $data['product'] = Product::where('slug', $slug)
      ->get();

    return view('pages.products.show', compact('data'));
  }
}
