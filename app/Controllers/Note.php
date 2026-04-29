<?php
namespace App\Controllers;
use App\Models\NoteModel;

class Note extends BaseController{
    public function create(){
        $noteModel = new NoteModel();
        $data =[
            'etudiant_id' => $this->request->getPost('etudiant_id'),
            'matiere' => $this->request->getPost('matiere'),
            'note' => $this->request->getPost('note')
        ];
        $noteModel->insert($data);
    }

    public function listNote(){
        $noteModel = new NoteModel();
        $data['notes'] = $noteModel->findAll();
        return view('note/index', $data);
    }

 public function findByEtudiant($etudiant_id)
{
     $noteModel = new NoteModel();

        $data['notes'] = $noteModel->findNotesEtudiantAvecParcours($id_etudiant);

        return view('note/bulletin', $data);
}

    public function delete($id){
        $noteModel = new NoteModel();
        $noteModel->delete($id);
    }

    public function update($id){
        $noteModel = new NoteModel();
        $data =[
            'etudiant_id' => $this->request->getPost('etudiant_id'),
            'matiere' => $this->request->getPost('matiere'),
            'note' => $this->request->getPost('note')
        ];
        $noteModel->update($id, $data);
    }


}