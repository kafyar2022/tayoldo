<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Text;
use Illuminate\Http\Request;

class DashController extends Controller
{
  public function index()
  {
    return redirect(route('home'));
  }

  public function state()
  {
    if (session()->get('isDashClosed')) {
      session()->forget('isDashClosed');
      return;
    }

    session()->put('isDashClosed', true);
    return;
  }

  public function products()
  {
    $data['products'] = Product::select(
      'id',
      'title',
    )
      ->orderBy('title')
      ->get();

    return view('dashboard.pages.products.index', compact('data'));
  }

  public function updateText(Request $request)
  {
    $text = Text::where('slug', $request->json('slug'))
      ->first();
    $text->text = $request->json('text');
    $text->update();

    $response = ['text' => $text->text];
    return json_encode($response);
  }

  public function create()
  {
    return view('dashboard.pages.products.create');
  }
}
