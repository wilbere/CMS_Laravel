<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name' => 'Wilber Galindez',
            'email' => 'wilber@gmail.com',
            'password' => Hash::make('123456')
        ]); 

        factory(App\User::class, 7)->create();

        App\Page::create([
            'parent_id' => null,
            'title' => 'Quienes Somos',
            'slug' => 'quienes-somos',
            'body' => 'Contenido de quienes somos'
        ]);

        App\Page::create([
            'parent_id' => 1,
            'title' => 'Misión',
            'slug' => 'mision',
            'body' => 'Contenido de mision'
        ]);

        App\Page::create([
            'parent_id' => 1,
            'title' => 'Visión',
            'slug' => 'vision',
            'body' => 'Contenido de Visión'
        ]);
    }
}
