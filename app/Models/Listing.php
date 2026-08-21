<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Listing extends Model
{
  use HasFactory;

  // or you can use Model::unguard(); in boot method in AppServiceProvider.php
  protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

  public function scopeFilter(Builder $query, array $filters)
  {
    if ($filters['tag'] ?? false) {
      $query->where('tags', 'like', '%' . $filters['tag'] . '%');
    }

    if ($filters['search'] ?? false) {
      $query
        ->where('title', 'like', '%' . $filters['search'] . '%')
        ->orWhere('description', 'like', '%' . $filters['search'] . '%')
        ->orWhere('tags', 'like', '%' . $filters['search'] . '%');
    }
  }
}
