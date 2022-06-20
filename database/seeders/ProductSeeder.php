<?php

namespace Database\Seeders;

use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 9) as $key) {
      Product::create([
        'title' => 'Протацит',
        'slug' => SlugService::createSlug(Product::class, 'slug', 'Протацит'),
        'img' => 'product.png',
        'release_form' => 'таблетки',
        'prescription' => 'RX',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus massa, malesuada duis phasellus tincidunt. Tortor, feugiat magna viverra pellentesque. Quam tortor, erat ac eu ut nibh.',
      ]);
    }
  }
}
