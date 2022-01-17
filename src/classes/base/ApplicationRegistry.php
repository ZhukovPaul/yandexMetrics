<?php 

namespace brevis\base;

class ApplicationRegistry{

    static private $instance = null;

    private function __construct(){
        session_start();
    }

    static function instance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function set($key, $value){
        $_SESSION[__CLASS__][$key] = $value; 
    } 
    
    private function get($key){
        if( isset($_SESSION[__CLASS__][$key]) ){
            return $_SESSION[__CLASS__][$key]; 
        }
    }

    public function setToken( $value ){
        self::instance()->set("token", $value);
    }

    public function getToken(){
        return self::instance()->get("token");
    }

}