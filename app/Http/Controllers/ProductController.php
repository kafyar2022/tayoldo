<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\ActiveSubstance;
use App\Models\Impact;
use App\Models\Prescription;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $data = Helper::getTexts('products');

    $data['prescriptions'] = Prescription::get();
    $data['impacts'] = Impact::get();
    $data['active_substances'] = ActiveSubstance::get();

    $data['prescription'] = request('prescription');
    $data['impact'] = request('impact');
    $data['active_substance'] = request('active_substance');

    $data['products'] = Product::select(
      'id',
      'title',
      'slug',
      'img',
      'prescription_id',
      'impact_id',
      'active_substance_id',
      'release_form_id',
      'description',
      'view_rate',
    )
      ->where('prescription_id', 'like', '%' . $data['prescription'] . '%')
      ->where('impact_id', 'like', '%' . $data['impact'] . '%')
      ->where('active_substance_id', 'like', '%' . $data['active_substance'] . '%')
      ->orderBy('view_rate', 'desc')
      ->paginate(8);

    return view('pages.products.index', compact('data'));
  }

  public function show($slug)
  {
    $data = Helper::getTexts('products.show');

    $data['product'] = Product::where('slug', $slug)
      ->first();

    $data['product']->view_rate++;
    $data['product']->update();

    $data['similar-products'] = Product::select(
      'id',
      'title',
      'slug',
      'img',
      'prescription_id',
      'impact_id',
      'active_substance_id',
      'release_form_id',
      'description',
      'view_rate',
    )
      ->where('impact_id', $data['product']->impact_id)
      ->where('active_substance_id', $data['product']->active_substance_id)
      ->take(3)
      ->get();

    return view('pages.products.show', compact('data'));
  }

  public function download(Request $request)
  {
    $product = Product::select(
      'id',
      'instruction'
    )
      ->find($request->id);

    if (!$product->instruction) {
      return back();
    }

    $file = public_path('files/products/files/' . $product->instruction);

    $extension = pathinfo($file, PATHINFO_EXTENSION);

    $headers = array(
      'Content-Type: application/' . $extension,
    );

    return response()->download($file, $product->instruction, $headers);
  }

  public function search(Request $request)
  {
    $data['products'] = Product::select('id', 'title')
      ->where('title', 'like', '%' . $request->keyword . '%')
      ->get();

    return view('dashboard.pages.products.index', compact('data'));
  }
}
