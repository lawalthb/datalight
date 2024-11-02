<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory;

  protected $fillable = [
    'email',
    'name',
    'phone',
    'password',
    'image',
    'is_active',
    'account_status',
    'user_role_id'
  ];

  protected $casts = [
    'is_active' => 'boolean',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  protected $hidden = [
    'password',
  ];

  // Example relationship with the user role if you have a `UserRole` model
  public function userRole()
  {
     return $this->belongsTo(UserRole::class, 'user_role_id');
  }
}
