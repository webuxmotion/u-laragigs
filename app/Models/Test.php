<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Test extends Model
{
  protected $fillable = ['title'];

  use HasFactory;

  public function scopeFilter(Builder $query, array $filters)
  {
    if ($filters['search'] ?? false) {
      $query->where('title', 'like', '%' . $filters['search'] . '%');
    }
  }
}
