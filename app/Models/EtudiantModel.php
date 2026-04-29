<?php
namespace App\Models;

use CodeIgniter\Model;

class EtudiantModel extends Model{
        protected $table = 'Etudiant';
        protected $allowedFields = ['nom','prenom','etu'];
        protected $validationRules=[
            'nom' => 'required',
            'prenom' => 'required',
            'etu' => 'required | is_unique[Etudiant.etu]'
        ];

        protected $validationMessage=[
            'nom' => [
                'required' => 'Nom requis'
            ],
            'prenom' => [
                'required' => 'prenom requis '
            ],
            'etu' => [
                'required' => 'ETU obligatoire',
                'is_unique' => 'ETU doit être unique'
            ]
        ];



        
}