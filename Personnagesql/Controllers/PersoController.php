<?php 
namespace App\Controllers;

require_once 'Models/PersoModel.php';

use App\Models\PersoModel;

class PersoController{
    protected $persoModel;

    public function __construct(){
        $this->persoModel = new PersoModel();
    }

    public function getIndex(){
        $persos = $this->persoModel->getAll();
        require_once 'Views/persos/index.php';
    }

    public function getCreate(){
        require_once 'Views/persos/create.php';
    }

    public function postCreate(){
        $perso = $_POST;
        $this->persoModel->create($perso);
        header('Location: ../perso/index');
    }

    public function getUpdate($id){
        $perso = $this->persoModel->getById($id);
        require_once 'Views/persos/update.php';
    }

    public function postUpdate($id){
        $name = $_POST['name'];
        $classe = $_POST['classe'];
        $race = $_POST['race'];
        $statattaque = $_POST['statattaque'];
        $statdefense = $_POST['statdefense'];
    
        $perso = [
            'name' => $name,
            'classe' => $classe,
            'race' => $race,
            'statattaque' => $statattaque,
            'statdefense' => $statdefense
        ];
    
        $this->persoModel->update($id, $perso);
        header('Location: ../index');
    }

    public function postDelete($id){
        $this->persoModel->delete($id);
        header('Location: ../index');
    }
}