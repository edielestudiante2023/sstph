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
				"name" => "CONJUNTO RESIDENCIAL TORRES DE SANTA BARBARA PROPIEDAD HORIZONTAL",
				"email" => "admontorresdesantabarbara@gmail.com",
				"phone_no" => "3143285529",
				"role" => "santabarbara",
				"password" => password_hash("900901619", PASSWORD_DEFAULT)
			]
		]);
	}
}

