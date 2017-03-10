<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author pfrias
 */
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('usuarioDAO');
       
    }
    
    public function index(){
        
        $this->load->view('login');
    }
    
    public function validaLogin(){
        //Capturo las variables
        $usuario = $this->input->post('usuario');
        $pass = $this->input->post('pass');
        
        //Encripto la contraseña
        $pass = encriptaPass($pass);
        
        //devolvemos el resultado
        $resultado = $this->usuarioDAO->validarLogin($usuario,$pass);
        if($resultado == 1){
            //si usuario y pass OK iniciamos la sesion
            //traigo los datos del usuario
            $user = $this->usuarioDAO->datosUsername($usuario);
            
            $this->session->set_userdata("idUsr", $user->id_usuario);
            $this->session->set_userdata("nomUsr", $user->nombres);
            $this->session->set_userdata("apellUsr", $user->apellidos);
            $this->session->set_userdata("perfilUsr", $user->id_perfil);
            
        }
        echo $resultado;

    }
}
    