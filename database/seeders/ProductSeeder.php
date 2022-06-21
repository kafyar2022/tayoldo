<?php

namespace Database\Seeders;

use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('ru_RU');

    foreach (range(1, 9) as $key) {
      Product::create([
        'prescription_id' => $faker->numberBetween($min = 1, $max = 2),
        'title' => 'Протацит',
        'slug' => SlugService::createSlug(Product::class, 'slug', 'Протацит'),
        'img' => 'product.png',
        'release_form' => 'таблетки',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus massa, malesuada duis phasellus tincidunt. Tortor, feugiat magna viverra pellentesque. Quam tortor, erat ac eu ut nibh.',
      ]);
    }
  }
}
