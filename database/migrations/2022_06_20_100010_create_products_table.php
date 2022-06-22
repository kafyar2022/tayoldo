<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug');
      $table->string('img');
      $table->text('description');
      $table->bigInteger('view_rate')->default(0);
      $table->integer('prescription_id')->nullable();
      $table->integer('impact_id')->nullable();
      $table->integer('active_substance_id')->nullable();
      $table->string('release_form_id')->nullable();
      $table->string('gain_url')->nullable();
      $table->text('content')->nullable();
      $table->string('instruction')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
}
