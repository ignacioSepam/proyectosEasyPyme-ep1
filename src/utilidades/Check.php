<?php
namespace utilidades;

class Check{
    

public static function password($data){
        
        
    }
    
    public static function email($data){
        if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }
    
    public static function edad18($data){
        
    }
    
    public static function dni($data){
        
    }
    public static function randomToken(){
        //genera token
       $token = openssl_random_pseudo_bytes(30);
       //convierte de binario a hexadecimal
       $token = bin2hex($token);
       return $token;
    }
    
}    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


