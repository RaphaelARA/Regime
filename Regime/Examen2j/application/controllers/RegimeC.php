<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeC extends CI_Controller {

    public function insertPages(){
        $data['main'] = "ajouteRegime";
		$this->load->view('pages/templateAdmin',$data);
    }

    public function insert(){
        $idObjectif =  $this->input->post('objectif');
		$num = $this->input->post('num');
		$duree = $this->input->post('duree');
        $pourcentagev = $this->input->post('pourcentageV');        
        $pourcentagel = $this->input->post('pourcentageL');        
        $pourcentagep = $this->input->post('pourcentageP');        
		$prix = $this->input->post('prix');
        $data['main'] = "ajouteRegime";
        $this->load->model('regime');
        $this->regime->insertRegime($idObjectif,$num,$duree,$pourcentagev,$pourcentagel,$pourcentagep,$prix);
        $this->load->view('pages/templateAdmin',$data);
    }
    
    public function list(){
        $this->load->model('regime');
        $data['main'] = "listeRegime";
        $data['liste_regime'] =  $this->regime->getAllRegime();
		$this->load->view('pages/templateAdmin',$data);
    }

    public function supprimer($idRegime){
        $this->load->model('regime');
        $affectedRows = $this->regime->deleteRegime($idRegime);

        if ($affectedRows > 0) {
            // La suppression a réussi
            redirect('regime/liste'); // Redirection vers la liste des régimes ou autre page souhaitée
        } else {
            // La suppression a échoué
            redirect('regime/liste'); // Redirection vers la liste des régimes ou autre page souhaitée avec un message d'erreur
        }
    }


}
