<?php
namespace App\Controllers;
use App\Models\EtudiantModel;

class Etudiant extends BaseController{
    public function index(){
        $etudiantModel ⁼ new EtudiantModel();
        $liste_etudiant = etudiantModel->getAll();

        if(empty($liste_etudiant)){
             return redirect()->to('/')
                ->withInput()
                ->with('Liste non valide');
        }
        $data[
            'nom',
            ''
        ]
    }
}