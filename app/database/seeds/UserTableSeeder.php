<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
                'username'   => 'Lucy',
                'email'      => 'lucykerubo763@gmail.com',
                'password'   => Hash::make('safaricom'),
                'first_name' => 'Lucy',
                'last_name'  => 'Kerubo',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'username'   => 'Cynthia',
                'email'      => 'munyivacynthier@gmail.com',
                'password'   => Hash::make('tysogirl'),
                'first_name' => 'Cynthia',
                'last_name'  => 'Munyiva',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'username'   => 'Olive',
                'email'      => 'chaoolive@gmail.com',
                'password'   => Hash::make('chaoolive'),
                'first_name' => 'Olive',
                'last_name'  => 'Chao',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
 
}