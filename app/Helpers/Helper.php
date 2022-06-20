<?php

/**
 * Custom helper class
 * @author Ikrom Rahimov fleck97rgb@gmail.com
 */

namespace App\Helpers;

use App\Models\Text;

class Helper
{
  public static function getTexts($pageName)
  {
    $texts = Text::where('page', $pageName)
      ->orWhere('page', null)
      ->get();

    foreach ($texts as $text) {
      $response[$text->slug] = $text->text;
    }

    return $response;
  }
}
