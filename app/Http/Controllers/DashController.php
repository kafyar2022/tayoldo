<?php

namespace App\Http\Controllers;

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
    return view('dashboard.pages.products.index');
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
}
