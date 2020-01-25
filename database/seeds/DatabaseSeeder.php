<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call(PapelTableSeeder::class);
        $this->call(PermissaoTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(PaginaTableSeeder::class);

        Model::reguard();

    }
}
