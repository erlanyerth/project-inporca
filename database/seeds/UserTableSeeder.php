<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
       $User = new User();
       $User-> name = "Administrador";
       $User-> nameuser = "administrador";
       $User-> password = "Inporca.19";
       $User-> tipouser = "Admin";
       $User-> status = "Activo";
       $User->save();

    }
}
