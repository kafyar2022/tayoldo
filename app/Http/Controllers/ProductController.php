<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $data['texts'] = Helper::getTexts('products');

    return view('pages.products.index', compact('data'));
  }
}
