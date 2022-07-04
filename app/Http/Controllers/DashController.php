<?php

namespace App\Http\Controllers;

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
}
