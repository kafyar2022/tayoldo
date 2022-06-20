<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $data['texts'] = Helper::getTexts('about');

    return view('pages.about', compact('data'));
  }
}
