<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $data['texts'] = Helper::getTexts('home');

    return view('pages.home', compact('data'));
  }
}
