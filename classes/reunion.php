<?php
    class reunion extends object_standard{
        //atribute variables
        protected $codigo;
        protected $fecha;
        protected $empleado;
        
        //components
        var $components = array();
        
        //auxiliar for primary key and for file
        var $auxiliars = array();
        
        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "fecha" => array(), "empleado" => array("foreign_name" => "em_re",
                "foreign" => "empleado", "foreign_attribute" => "cedula"));
        }
        
        public function primary_key() {
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name) {
            switch ($class){
                case "empleado":
                    switch ($rel_name){
                        case "em_re":
                        return array("empleado");
                        break;
                    }
                break;
            
                default:
                break;
            }
        }
    }
?>