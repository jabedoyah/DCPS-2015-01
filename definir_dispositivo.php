<?php
require('configs/include.php');
class c_definir_dispositivo extends super_controller{
    public function add(){
        $dispositivo = new dispositivo($this->post);
        
        $this->orm->connect();
        $this->orm->insert_data("normal",$dispositivo);
        $this->orm->close();

    }
    
    public function display(){

        $this->engine->display('definir_dispositivo.tpl');
    }
    
    public function run(){
        if (isset($this->get->option)){$this->{$this->get->option}();}
        $this->display();
    }
}

$call = new c_definir_dispositivo();
$call->run();
?>


