<?php
require('configs/include.php');

class c_realizar_diseno extends super_controller{
    
    public function add(){
        $diseno = new diseno($this->post);
        $this->orm->connect();
        $this->orm->insert_data("normal",$diseno);
        $this->orm->close();

        //print_r2($diseno);
    }

    public function display(){ 
        $options['dispositivo']['lvl2']='all';
        $this->orm->connect();
        $this->orm->read_data(array("dispositivo"),$options);
        $dispositivo = $this->orm->get_objects("dispositivo");
        $this->engine->assign('dispositivo',$dispositivo);   
        
        $this->engine->display('realizar_diseno.tpl');
        $this->orm->close();
    }
    
    public function run(){
        if (isset($this->get->option)){$this->{$this->get->option}();}
        $this->display();
    }
}

$call = new c_realizar_diseno();
$call->run();
?>