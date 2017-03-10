<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productos
 *
 * @author pfrias
 */
class Productos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        //$this->load->model('productosDAO');
        
    }
    
    public function index(){
        
        if($this->session->has_userdata('idUsr')){
            
            $datoTitulo = array(
            
                'titulo' => "ERP-Productos y Servicios"
            );
            $this->load->view('modeloWeb/head',$datoTitulo);
            $this->load->view('modeloWeb/logo');
            $this->load->view('modeloWeb/notificaciones');
            $this->load->view('modeloWeb/usuario');
            $this->load->view('modeloWeb/perfilIzquierdo');
            $this->load->view('modeloWeb/menuTabs');
            
            $idPerfil = $this->session->perfilUsr;
            $dataMenu = array(
                'menu' => $this->usuarioDAO->cargaMenu($idPerfil)
            );
            $this->load->view('modeloWeb/tabMenu',$dataMenu);
            $this->load->view('modeloWeb/tabEmail');
            $this->load->view('modeloWeb/tabContactos');
            
            $this->load->view('productos');
            $this->load->view('js/productosJs');
            
            
        }else{
            
            redirect();
        }
        
    }
}
