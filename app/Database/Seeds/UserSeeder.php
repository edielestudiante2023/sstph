<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			// [
			// 	"name" => "LA ALEGRIA IV CONJUNTO RESIDENCIAL PH",
			// 	"email" => "conjuntoalegria4@gmail.com",
			// 	"phone_no" => "3107516073",
			// 	"role" => "alegria4",
			// 	"password" => password_hash("901483876", PASSWORD_DEFAULT)
			// ],
			// [
			// 	"name" => "CONJUNTO RESIDENCIAL HELICONIA - PROPIEDAD HORIZONTAL",
			// 	"email" => "crheliconiaciudadverde@gmail.com",
			// 	"phone_no" => "3107516073",
			// 	"role" => "heliconia",
			// 	"password" => password_hash("900873512", PASSWORD_DEFAULT)
			// ],
			[
				"name" => "EDIFICIO TORRES DE LAS AMERICAS",
				"email" => "editorrresdelasamericas@gmail.com",
				"phone_no" => "3166286098",
				"role" => "torresdelasamericas",
				"password" => password_hash("830044108", PASSWORD_DEFAULT)
			]
		]);
	}
}
/* 
Este codigo lo coloco en terminal
php spark db:seed UserSeeder

ROUTES: DEBO ASEGURAR CREAR LA NUEVA RUTA PARA MI CLIENTE
COTROLLERS: MODIFICAR EL UserController.php
clienteController: en clientecontroller.php modificar los items
CREAR LA VISTA DEL NUEVO CLIENTE
SUBIR EL LOGO DEL NUEVO CLIENTE */


