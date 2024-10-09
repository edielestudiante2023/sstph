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
			 [
			 	"name" => "CONJUNTO RESIDENCIAL PINAR DE LA COLINA 1",
			 	"email" => "pinarcolina1@gmail.com",
			 	"phone_no" => "3229408784",
			 	"role" => "pinarcolina",
			 	"password" => password_hash("900072254", PASSWORD_DEFAULT)
			 ],
			 [
			 	"name" => "SAUCO CONJUNTO RESIDENCIAL",
			 	"email" => "crsauco@gmail.com",
			 	"phone_no" => "3118550805",
			 	"role" => "sauco",
			 	"password" => password_hash("900779337", PASSWORD_DEFAULT)
			 ],
			[
				"name" => "VERBENA CONJUNTO RESIDENCIAL",
				"email" => "admonverbena@gmail.com",
				"phone_no" => "3192183846",
				"role" => "verbena",
				"password" => password_hash("901528412", PASSWORD_DEFAULT)
			],
		
			 
			[
				"name" => "AGRUPACION DE VIVIENDA JACARANDA - PH",
				"email" => "jacaranda.agrupacion@gmail.com",
				"phone_no" => "3166286098",
				"role" => "jacaranda",
				"password" => password_hash("900226810", PASSWORD_DEFAULT)
			],
		
			 
			[
				"name" => "CONJUNTO RESIDENCIAL ALTAVISTA DEL PORTAL - PH",
				"email" => "conjuntoaltavistadelportal@gmail.com",
				"phone_no" => "3134765955",
				"role" => "altavista",
				"password" => password_hash("901139929", PASSWORD_DEFAULT)
			],
			[
				"name" => "AGRUPACIÓN DE VIVIENDA LAURELES DE NUEVA CASTILLA - PH",
				"email" => "laurelesnvacastilla@hotmail.com",
				"phone_no" => "3134765955",
				"role" => "nuevacastilla",
				"password" => password_hash("900154573", PASSWORD_DEFAULT)
			],
			[
				"name" => "BOSQUES DEL ZAPAN II MANZANA VII",
				"email" => "zapan2mz7@gmail.com",
				"phone_no" => "3134765955",
				"role" => "zapanii",
				"password" => password_hash("900294471", PASSWORD_DEFAULT)
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


