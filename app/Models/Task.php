<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $start_date
 * @property $end_date
 * @property $priority
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Task extends Model
{

  static $rules = [
    'name' => 'required',
    'description' => 'required',
    'start_date' => 'required',
    'end_date' => 'required',
    'priority' => 'required',
    'status' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'description', 'start_date', 'end_date', 'priority', 'status'];
}
