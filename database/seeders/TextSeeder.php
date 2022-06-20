<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = [
      [
        'page' => null,
        'slug' => 'copyright',
        'text' => '© ООО “Tayoldo”
Все права защищены',
      ],
      [
        'page' => null,
        'slug' => 'email',
        'text' => 'info@tayoldo.com'
      ],
      [
        'page' => null,
        'slug' => 'phone',
        'text' => '+992 918 55 64 64',
      ],
    ];

    foreach ($texts as $text) {
      Text::create([
        'page' => $text['page'],
        'slug' => $text['slug'],
        'text' => $text['text'],
      ]);
    }
  }
}
