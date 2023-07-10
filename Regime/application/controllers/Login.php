<?php
class Login extends CI_Controller {
    
    // Constructeur du contrôleur
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Charge le modèle User_model
    }

    // Afficher le formulaire de connexion
    public function index() {
        $this->load->view('login'); // Charge la vue login_view.php
    }

    // Traiter le formulaire de connexion
    public function process_login() {
        // Récupérer les données soumises depuis le formulaire
        $usernameOrEmail = $this->input->post('username_or_email');
        $password = $this->input->post('password');
        
        // Vérifier les informations de connexion
        $is_valid_login = $this->User_model->verify_login($usernameOrEmail, $password);
    
        if ($is_valid_login) {
            // Les informations de connexion sont valides, rediriger vers une autre page
            redirect('dashboard');
        } else {
            // Les informations de connexion sont incorrectes, afficher un message d'erreur
            $data['error_message'] = 'Nom d\'utilisateur, adresse e-mail ou mot de passe incorrect.';
            $this->load->view('login', $data); // Recharger la vue login_view.php avec un message d'erreur
        }
    }
}