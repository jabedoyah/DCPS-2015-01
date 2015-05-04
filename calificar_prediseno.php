<?php
require('configs/include.php');

class c_calificar_prediseno extends super_controller {

    //protected $pr;

    public function add()
	{
            //$prediseno = new prediseno($this->post);
            //$codp = $this->post->codigo;
            //if(is_empty($codp))
            {throw_exception("Error, falta seleccionar prediseño");}
            
            $this->orm->connect();
            $this->orm->update_data("normal",$prediseno);
            $this->orm->close();
            
            $this->type_warning = "success";
            $this->msg_warning = "calificacion exitosa";
            
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning',  $this->type_warning);
            $this->engine->assign('msg_warning',  $this->msg_warning);
	}

    public function display() {

        $option['prediseno']['lvl2']="all";
        
        $this->orm->connect();
        $this->orm->read_data(array("prediseno"),$option);
        $prediseno = $this->orm->get_objects("prediseno");
        $this->orm->close();
            
        $this->engine->assign('prediseno', $prediseno);
        $this->engine->assign('title', 'asignar viabilidad');
        
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('calificar_prediseno.tpl');
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

$ob = new c_calificar_prediseno();
$ob->run();
?>