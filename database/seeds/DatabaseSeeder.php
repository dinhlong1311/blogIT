<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}

// admins table
class AdminsTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('admins')->insert([
      'name'=>'Admin',
      'email'=>'admin@demo.com',
      'password'=>bcrypt('123456')
    ]);
  }
}

// roles table
class RolesTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('roles')->insert([
      ['role'=>'User'],
      ['role'=>'Writer'],
      ['role'=>'Editor']
    ]);
  }
}

// users table
class UsersTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
      ['name'=>'User', 'email'=>'user@demo.com', 'password'=>bcrypt('123456')],
      ['name'=>'Writer', 'email'=>'writer@demo.com', 'password'=>bcrypt('123456')],
      ['name'=>'Editor', 'email'=>'editor@demo.com', 'password'=>bcrypt('123456')]
    ]);
  }
}

// categories table
class CategoriesTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('categories')->insert([
      ['name'=>'Desktop', 'name_unsigned'=>'may-tinh'],
      ['name'=>'Mobile', 'name_unsigned'=>'dien-thoai'],
      ['name'=>'Technology', 'name_unsigned'=>'cong-nghe'],
      ['name'=>'Program', 'name_unsigned'=>'lap-trinh'],
      ['name'=>'UX/UI', 'name_unsigned'=>'ux-ui']
    ]);
  }
}
