<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('isLoggedIn')) {

			if (session()->get('role') == "alegria4") {
				return redirect()->to(base_url('alegria4'));
			}

			if (session()->get('role') == "heliconia") {
				return redirect()->to(base_url('heliconia'));
			}
			if (session()->get('role') == "tucanes") {
				return redirect()->to(base_url('tucanes'));
			}
			if (session()->get('role') == "zorzal") {
				return redirect()->to(base_url('zorzal'));
			}
			if (session()->get('role') == "hatochico") {
				return redirect()->to(base_url('hatochico'));
			}
			if (session()->get('role') == "arboleda") {
				return redirect()->to(base_url('arboleda'));
			}
			if (session()->get('role') == "caobo") {
				return redirect()->to(base_url('caobo'));
			}
			if (session()->get('role') == "castano") {
				return redirect()->to(base_url('castano'));
			}
			if (session()->get('role') == "chaletlacabana") {
				return redirect()->to(base_url('chaletlacabana'));
			}
			if (session()->get('role') == "esperanza3") {
				return redirect()->to(base_url('esperanza3'));
			}
			if (session()->get('role') == "lucerna") {
				return redirect()->to(base_url('lucerna'));
			}
			if (session()->get('role') == "plazuelas") {
				return redirect()->to(base_url('plazuelas'));
			}
			if (session()->get('role') == "roma3") {
				return redirect()->to(base_url('roma3'));
			}
			if (session()->get('role') == "sansebastian") {
				return redirect()->to(base_url('sansebastian'));
			}
			if (session()->get('role') == "senderoslaurel") {
				return redirect()->to(base_url('senderoslaurel'));
			}
			if (session()->get('role') == "verona") {
				return redirect()->to(base_url('verona'));
			}
			if (session()->get('role') == "zapan1") {
				return redirect()->to(base_url('zapan1'));
			}
			if (session()->get('role') == "edenluz") {
				return redirect()->to(base_url('edenluz'));
			}
			if (session()->get('role') == "pratum") {
				return redirect()->to(base_url('pratum'));
			}
			if (session()->get('role') == "santabarbara") {
				return redirect()->to(base_url('santabarbara'));
			}
			if (session()->get('role') == "encanto4") {
				return redirect()->to(base_url('encanto4'));
			}
			if (session()->get('role') == "cedrosuba") {
				return redirect()->to(base_url('cedrosuba'));
			}
			if (session()->get('role') == "villahato") {
				return redirect()->to(base_url('villahato'));
			}
			if (session()->get('role') == "huerto") {
				return redirect()->to(base_url('huerto'));
			}
			if (session()->get('role') == "huertas") {
				return redirect()->to(base_url('huertas'));
			}
			if (session()->get('role') == "torresdelasamericas") {
				return redirect()->to(base_url('torresdelasamericas'));
			}
			if (session()->get('role') == "alcaparro") {
				return redirect()->to(base_url('alcaparro'));
			}
			if (session()->get('role') == "torresdelosarboles") {
				return redirect()->to(base_url('torresdelosarboles'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
			if (session()->get('role') == "xxxxx") {
				return redirect()->to(base_url('xxxxx'));
			}
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}