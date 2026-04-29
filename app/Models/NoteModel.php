<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
 protected $table            = 'note';
    protected $primaryKey       = 'id_note';

    protected $allowedFields    = [
        'id_matiere',
        'id_etudiant',
        'note'
    ];


    
public function findNotesEtudiantAvecParcours($id_etudiant)
{
    return $this->db->table('note')
        ->select('
            Etudiant.nom,
            Etudiant.prenom,
            Matiere.nom_matiere,
            Matiere.coefficient,
            note.note,
            Semestre.nom AS semestre,
            parcours_mat.nom_option,
            parcours_mat.nom_responsable
        ')
        ->join('Etudiant', 'Etudiant.id = note.id_etudiant')
        ->join('Matiere', 'Matiere.id = note.id_matiere')
        ->join('Semestre', 'Semestre.id = Matiere.id_semestre')

    
        ->join('groupe_mat', 'groupe_mat.id_groupe = Matiere.id_groupe', 'left')
        ->join('parcours_mat', 'parcours_mat.id_parcours = groupe_mat.id_parcours', 'left')

        ->where('note.id_etudiant', $id_etudiant)
        ->orderBy('Semestre.id', 'ASC')
        ->get()
        ->getResultArray();
}
 
}
