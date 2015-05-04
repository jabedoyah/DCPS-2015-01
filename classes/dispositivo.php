<?php
    class dispositivo extends object_standard {
        
        //attribute variables
        protected $codigo;
        protected $costo;
        protected $funcion;

        //components
        var $components = array();

        //auxiliars for primary key and for files
        var $auxiliars = array();

        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "costo" => array(), "funcion" => array());
        }

        public function primary_key() {
            return array("costo");
        }

        public function relational_keys($class, $rel_name) {
            switch($class) {
                default:
                break;
            }
        }
    }
?>