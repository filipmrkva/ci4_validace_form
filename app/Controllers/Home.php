<?php

namespace App\Controllers;
use App\Models\FormModel;

class Home extends BaseController
{
	public function index()
	{
		return view('contact_form');
	}
         
    public function formValidation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'jmeno' => 'required|min_length[3]',
            'prijmeni' => 'required|min_length[3]',
            'prezdivka' => 'required|min_length[3]',
            'email' => 'required|min_length[5]',
            
            
        ]);

        $formModel = new FormModel();
 
        if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'jmeno' => $this->request->getVar('jmeno'),
                'prijmeni' => $this->request->getVar('prijmeni'),
                'prezdivka'  => $this->request->getVar('prezdivka'),
                'email'  => $this->request->getVar('email'),
                
            ]);          
            echo '<script>alert("Registrace proběhla v pořádku")</script>';
            return view('contact_form');

        }
    }

}