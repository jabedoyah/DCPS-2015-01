<?php
    class viabilidad extends object_standard{
        //atribute variables
        protected $codigo;
        protected $resultado;
        protected $causa;
        protected $empleado;
        protected $prediseño;
        
        //components
        var $components = array();
        
        //auxiliar for primary key and for file
        var $auxiliars = array();
        
        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "resultado" => array(), "causa" => array(), 
                "empleado" => array("foreign_name" => "em_vi","foreign" => "empleado", "foreign_attribute" => "cedula"), 
                "prediseño" => array("foreign_name" => "pr_vi","foreign" => "prediseño", "foreign_attribute" => "codigo"));
        }
        
        public function primary_key() {
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name) {
            switch ($class){
                case "empleado":
                    switch ($rel_name){
                        case "em_vi":
                        return array("empleado");
                        break;
                    }
                break;
            
                case "prediseño":
                        switch ($rel_name){
                            case "pr_vi":
                            return array("prediseño");
                            break;
                        }
                    break;
            
                default:
                break;
            }
        }
    }
?>