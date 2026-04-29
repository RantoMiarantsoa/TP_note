<?php
namespace App\Controllers;

class Etudiant extends BaseController{ 

    public function index()
{
    $etudiantModel = new EtudiantModel();

    $liste_etudiant = $etudiantModel->findAll();

    if (empty($liste_etudiant)) {
        return redirect()->to('/')
            ->with('error', 'Liste non valide');

    }

    $data = [
        'etudiants' => $liste_etudiant
    ];

    return view('etudiant', $data);
}
}
