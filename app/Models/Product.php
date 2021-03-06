<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory, Sluggable;

  protected $guarded = [];

  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title',
      ],
    ];
  }

  public function prescription()
  {
    return $this->belongsTo(Prescription::class, 'prescription_id');
  }

  public function impact()
  {
    return $this->belongsTo(Impact::class, 'impact_id');
  }

  public function active_substance()
  {
    return $this->belongsTo(ActiveSubstance::class, 'active_substance_id');
  }

  public function release_form()
  {
    return $this->belongsTo(ReleaseForm::class, 'release_form_id');
  }
}
