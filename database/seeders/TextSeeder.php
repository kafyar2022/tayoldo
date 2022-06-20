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

      [
        'page' => 'home',
        'slug' => 'home-vitrin-title',
        'text' => 'Tayoldo pharma',
      ],

      [
        'page' => 'home',
        'slug' => 'home-vitrin-subtitle',
        'text' => 'Молодая и перспективная компания с ключевыми компетенциями в сфере фармацевтики.

Благодаря нашим инновационным продуктам мы помогаем людям с неизлечимой болезнью.',
      ],
      [
        'page' => 'home',
        'slug' => 'home-mission-title',
        'text' => 'Миссия нашей компании',
      ],
      [
        'page' => 'home',
        'slug' => 'home-mission-subtitle',
        'text' => 'Cтать ведущей фармацевтической компанией мирового уровня, в которой будут работать сплоченные талантливые люди, занимающиеся созданием инновационных продуктов.',
      ],
      [
        'page' => 'home',
        'slug' => 'home-production-title',
        'text' => 'Наша продукция',
      ],
      [
        'page' => 'home',
        'slug' => 'home-production-subtitle',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec et egestas ultrices placerat id rhoncus. Sapien semper odio rhoncus, aliquam nulla quisque. Pharetra mauris commodo, varius eget sit aliquam amet.',
      ],
      [
        'page' => '',
        'slug' => '',
        'text' => '',
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
