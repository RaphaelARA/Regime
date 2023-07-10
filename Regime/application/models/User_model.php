<?php
class User_model extends CI_Model {
    // Constructeur du modèle
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Charge la bibliothèque de base de données de CodeIgniter
    }
 
    // Vérifier les informations de connexion de l'utilisateur
    public function verify_login($usernameOrEmail, $password) {
        $this->db->where('password', $password);
        $this->db->group_start();
        $this->db->where('name', $usernameOrEmail);
        $this->db->or_where('mail', $usernameOrEmail);
        $this->db->group_end();
        $query = $this->db->get('user'); // 'user' est le nom de votre table d'utilisateurs dans la base de données
        
        if ($query->num_rows() == 1) {
            // Les informations de connexion sont correctes
            return true;
        } else {
            // Les informations de connexion sont incorrectes
            return false;
        } 
    }
}