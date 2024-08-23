<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();
                //var_dump( $user );
                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if($user['role'] == "alegria4"){
                   //redirect('View/alegria4/dashboard');
                   return redirect()->to(base_url('alegria4'));

                }elseif($user['role'] == "heliconia"){

                    return redirect()->to(base_url('heliconia'));

                }
                
                elseif($user['role'] == "tucanes")
                
                {return redirect()->to(base_url('tucanes'));}
                
                elseif($user['role'] == "zorzal")
                
                {return redirect()->to(base_url('zorzal'));}
                
                elseif($user['role'] == "hatochico")
                
                {return redirect()->to(base_url('hatochico'));}
                
                elseif($user['role'] == "arboleda")
                
                {return redirect()->to(base_url('arboleda'));}
                
                elseif($user['role'] == "caobo")
                
                {return redirect()->to(base_url('caobo'));}
                
                elseif($user['role'] == "castano")
                
                {return redirect()->to(base_url('castano'));}
                
                elseif($user['role'] == "chaletlacabana")
                
                {return redirect()->to(base_url('chaletlacabana'));}
                
                elseif($user['role'] == "esperanza3")
                
                {return redirect()->to(base_url('esperanza3'));}
                
                elseif($user['role'] == "lucerna")
                
                {return redirect()->to(base_url('lucerna'));}
                
                elseif($user['role'] == "plazuelas")
                
                {return redirect()->to(base_url('plazuelas'));}
                
                elseif($user['role'] == "roma3")
                
                {return redirect()->to(base_url('roma3'));}
                
                elseif($user['role'] == "sansebastian")
                
                {return redirect()->to(base_url('sansebastian'));}
                
                elseif($user['role'] == "senderoslaurel")
                
                {return redirect()->to(base_url('senderoslaurel'));}
                
                elseif($user['role'] == "verona")
                
                {return redirect()->to(base_url('verona'));}
                
                elseif($user['role'] == "zapan1")
                
                {return redirect()->to(base_url('zapan1'));}
                
                elseif($user['role'] == "edenluz")
                
                {return redirect()->to(base_url('edenluz'));}
                
                elseif($user['role'] == "pratum")
                
                {return redirect()->to(base_url('pratum'));}
                
                elseif($user['role'] == "santabarbara")
                
                {return redirect()->to(base_url('santabarbara'));}
                
                elseif($user['role'] == "villahato")
                
                {return redirect()->to(base_url('villahato'));}
                
                elseif($user['role'] == "cedrosuba")
                
                {return redirect()->to(base_url('cedrosuba'));}
                
                elseif($user['role'] == "encanto4")
                
                {return redirect()->to(base_url('encanto4'));}
                
                elseif($user['role'] == "huerto")
                
                {return redirect()->to(base_url('huerto'));}
                
                elseif($user['role'] == "huertas")
                
                {return redirect()->to(base_url('huertas'));}
                
                elseif($user['role'] == "torresdelasamericas")
                
                {return redirect()->to(base_url('torresdelasamericas'));}
                
                elseif($user['role'] == "alcaparro")
                
                {return redirect()->to(base_url('alcaparro'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
                
                elseif($user['role'] == "xxxx")
                
                {return redirect()->to(base_url('xxxx'));}
            }
        }
        return view('login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_no' => $user['phone_no'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}