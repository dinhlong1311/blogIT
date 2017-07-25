<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'roles';
  protected $fillable = ['role'];
  protected $dates = ['created_at', 'updated_at'];

  // relationship: users table
  public function users()
  {
    return $this->hasMany('App\User', 'role_id', 'id');
  }

  // get all role
  public function getAllRole()
  {
    return self::all();
  }

  // create 1 new role
  public function createNewRole($input)
  {
    $role = $input;
    return self::create($role);
  }
}
