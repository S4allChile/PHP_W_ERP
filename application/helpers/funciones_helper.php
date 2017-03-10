<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('encriptaPass')){   
    
    function encriptaPass($pass){
        
        //Creamos un HASH
        $hash = 'iuytaGY=%723';
        
        //encriptamos el hash
        $hash = md5($hash);
        
        //Unimos el Hash a la contraseña
        $pass1 = $hash.$pass;
        
        //Encriptamos y retornamos
        return sha1(md5($pass1));
                
    }
    
}

if(!function_exists('indicadores')){
    
    function indicadores($indicador){
        //colocamos la url de los indicadores
        $url = 'http://www.indicadoresdeldia.cl/webservice/indicadores.xml';
        $resultado = "";
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $resultado = curl_exec ($ch);
            
            $datos = new SimpleXMLElement($resultado);
            
            switch ($indicador){
                
                case 'UF':
                    echo $datos->indicador[0]->uf;
                    break;
                case 'DOLAR':
                    echo $datos->moneda[0]->dolar;
                    break;
                case 'EURO':
                    echo $datos->moneda[0]->euro;
                    break;
                case 'UTM':
                    echo $datos->indicador[0]->utm;
                    break;
                case 'SANTORAL':
                    echo $datos->santoral[0]->hoy;
                    break;
                case 'RESTRICCION':
                    echo $datos->restriccion[0]->normal;
                    break;
                case 'RESTRICCION_CATALITICO':
                    echo $datos->restriccion[0]->catalitico;
                    break;
                default :
                    echo 'indicador inexistente';
                    break;
            }
            
            
        } catch (Exception $ex) {
            
            echo 'Problemas de conexion cod: '.$ex;
            
        }
        
        
        
        
        
    }
}



