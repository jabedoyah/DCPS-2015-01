<?php
require('configs/include.php');

class c_revisar_diseno extends super_controller {

    //protected $pr;

    public function add()
	{
            $diseno = new diseno($this->post);
            $codp = $this->post->codigo;
            $cali = $this->post->evaluacion;
            if(is_empty($codp))
            {throw_exception("Error, falta seleccionar diseño");}
            if(is_empty($cali))
            {throw_exception("Error, falta evaluar diseño");}
            
            $this->orm->connect();
            $this->orm->insert_data("normal",$diseno);
            $this->orm->close();
            
            $this->type_warning = "success";
            $this->msg_warning = "revicion exitosa";
            
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning',  $this->type_warning);
            $this->engine->assign('msg_warning',  $this->msg_warning);
	}

    public function display() {

        $option['prediseno']['lvl2']="all";
        
        $this->orm->connect();
        $this->orm->read_data(array("diseno"),$option);
        $diseno = $this->orm->get_objects("diseno");
        print_r2($diseno);
        $this->orm->close();
            
        $this->engine->assign('diseno', $diseno);
        $this->engine->assign('title', 'Revisar diseño');
        
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('revisar_diseno.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run() {
        try {if (isset($this->get->option)){$this->{$this->get->option}();}}
            catch (Exception $e){
                $this->error=1;  $this->msg_warning=$e->getMessage();
                $this->engine->assign('type_warning',$this->type_warning);
                $this->engine->assign('msg_warning',$this->msg_warning);
                $this->temp_aux = 'message.tpl';
            }
        $this->display();
    }

}

$ob = new c_revisar_diseno();
$ob->run();
?>