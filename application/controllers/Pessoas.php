<?php
/**
*
*O controlador, a classe que fará a 
*comunicação entre o modelo (camada de dados e abstração)
*e a visão (camada de apresentação).
*/
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pessoas extends CI_Controller {
 
    function __construct() {
        parent::__construct();
    }
 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "CRUD com CodeIgniter | Cadastro de Pessoas";
        $this->load->view('pessoas_view.php', $data);
    }
}