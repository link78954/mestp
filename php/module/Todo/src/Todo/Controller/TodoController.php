<?php

namespace Todo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Json\Json;
use Zend\View\Model\ViewModel;

include("Connexion.php");
class TodoController extends AbstractActionController {

    public function indexAction() {
        
    }

    public function listAction() {
        
        $renault=mysql_real_escape_string('SELECT * FROM zend WHERE NomVoiture LIKE Renault');
        
	$reponse=$link->query($req);
	
	while ($donnees = $reponse->fetch())
        $data = array(array("NomVoiture" =>$reponse['Nomvoiture'], "Plaque" => "congé"), array("NomVoiture" => "21/12/2013", "Plaque" => "congé"), array("NomVoiture" => "21/12/2013", "Plaque" => "congé"));

        echo Json::encode($data);
        exit();
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
