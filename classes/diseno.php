<?php
    class diseno extends object_standard{
        
        protected $codigo;
        protected $imagen;
        protected $dispositivo;
        
        var $components = array();
        var $auxiliars = array();
        
        public function metadata(){
            return array("codigo" => array(), "imagen" => array(), "dispositivo" => array());
        }
        
        public function primary_key(){
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name){
            switch($class){
                default:
                    break;
            }
        }
    }
?>