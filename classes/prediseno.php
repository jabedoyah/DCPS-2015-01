<?php
    class prediseno extends object_standard{
        //atribute variables
        protected $codigo;
        protected $resultado;
        protected $especialista;
        protected $gerente;
        protected $analista;
        
        //components
        var $components = array();
        
        //auxiliar for primary key and for file
        var $auxiliars = array();
        
        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "resultado" => array(), 
                "especialista" => array("foreign_name" => "es_pr","foreign" => "empleado", "foreign_attribute" => "cedula"), 
                "gerente" => array("foreign_name" => "ge_pr","foreign" => "empleado", "foreign_attribute" => "cedula"),
                "analista" => array("foreign_name" => "an_pr","foreign" => "empleado", "foreign_attribute" => "cedula"));
        }
        
        public function primary_key() {
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name) {
            switch ($class){
                case "especialista":
                    switch ($rel_name){
                        case "es_pr":
                        return array("especialista");
                        break;
                    }
                break;
            
                case "gerente":
                        switch ($rel_name){
                            case "ge_pr":
                            return array("gerente");
                            break;
                        }
                    break;
            
                case "analista":
                        switch ($rel_name){
                            case "an_pr":
                            return array("analista");
                            break;
                        }
                    break;
                
                default:
                break;
            }
        }
    }
?>