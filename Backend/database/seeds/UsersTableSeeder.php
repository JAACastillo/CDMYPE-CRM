<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

            $user = new User;
            $user->name = 'Aminta Rodas';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor Empresarial';
            $user->descripcion = $faker->text;
            $user->imagen = 'aminta.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Jesus Alvarado';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor TIC';
            $user->descripcion = $faker->text;
            $user->imagen = 'jesus.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Ingrid Hernandez';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor Empresarial';
            $user->descripcion = $faker->text;
            $user->imagen = 'ingrid.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Natalia Calderon';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor Empresarial';
            $user->descripcion = $faker->text;
            $user->imagen = 'natalia.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Walter Cuellar';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor Empresarial';
            $user->descripcion = $faker->text;
            $user->imagen = 'walter.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Gustavo Jovel';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor Financiero';
            $user->descripcion = $faker->text;
            $user->imagen = 'gustavo.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Rhina Molina';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Asesor';
            $user->cargo = 'Asesor EFE';
            $user->descripcion = $faker->text;
            $user->imagen = 'rhina.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Carmen Mercado';
            $user->email = 'admin@admin.com';
            $user->tipo = 'Compras';
            $user->cargo = 'Técnico de Compras';
            $user->descripcion = $faker->text;
            $user->imagen = 'carmen.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            // for($i = 1; $i <= 20 ; $i++)
            // {
            //     $user = new User;
            //     $user->name = 'Alumno Prueba';
            //     $user->email = $faker->email();
            //     $user->nit = '2222-222222-222-'. $i;
            //     $user->tipo = 3;
            //     $user->sexo = $faker->numberBetween(1,2);
            //     $user->avatar = 'alumno.png';
            //     $user->password = Hash::make('admin');
            //     $user->escuela_id = 1;
            //     $user->save();

            // }
            
    }
}
