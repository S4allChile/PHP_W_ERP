<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author pfrias
 */
class UsuarioDAO extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function validarLogin($user,$pass){
        
        $this->db->WHERE('username',$user);
        $sql = $this->db->get('usuario');    
        if($sql->num_rows() > 0){
            
            $this->db->WHERE('username',$user);
            $this->db->WHERE('password',$pass);
            $sql = $this->db->get('usuario');
            
            if($sql->num_rows() > 0){
                
                return 1; //Usuario y Pass OK
            }
            else{
                
                return 2; //Contraseña con problemas
            }
           
        }
        else{
            
             return 0; //Usuario no existe
            
        }
        
        
    }
    
    
    public function datosUsername($username){
        
        $this->db->WHERE('username',$username);
        $sql = $this->db->get('usuario');
        
        return $sql->row();
        
    }
    
    public function cargaMenu($idPerfil){
        
        if($idPerfil == 1){
            $sql = $this->db->get('menu');
            
            return $sql->result();
        }else{
            $this->db->WHERE('id_perfil',$idPerfil);
            $sql = $this->db->get('menu_autorizado');
        
            return $sql->result();
        }
        
        
    }
}
