<?php
namespace App\Models;

use CodeIgniter\Model;

class MatiereModel extends Model{
        protected $table = 'Matiere';
        protected $allowedFields = [
            'nom_matiere',
            'coefficient',
            'key_matiere',
            ];
        protected $validationRules = [
            'nom_matiere' => 'required',
            'coefficient' => 'required',
            'key_matiere' => 'required|is_unique'
        ];

public function findNoteByMatiere($id_matiere)
{
    return $this->where('id_matiere', $id_matiere)
                ->findAll();
}  
}