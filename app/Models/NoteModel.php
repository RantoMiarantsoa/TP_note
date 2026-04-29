<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table            = 'note';
    protected $primaryKey       = 'id_note';
    protected $allowedFields    = [];

    protected $validationRules      = [];
    protected $validationMessages   = [];
    

 
}
