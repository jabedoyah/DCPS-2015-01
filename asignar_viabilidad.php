<?php
require('configs/include.php');

class c_asignar_viabilidad extends super_controller {

    //protected $pr;

    public function add()
	{
            $viabilidad = new viabilidad($this->post);
            if(is_empty($viabilidad->get('codigo')))
            {throw_exception("Faltan datos por ingresar");}
            
            $this->orm->connect();
            $this->orm->insert_data("normal",$viabilidad);
            $this->orm->close();
            
            $this->type_warning = "success";
            $this->msg_warning = "asiganacion exitosa";
            
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning',  $this->type_warning);
            $this->engine->assign('msg_warning',  $this->msg_warning);
	}

    public function display() {

        $option['prediseno']['lvl2']="sinviabilidad";
        $components['prediseno']['viabilidad']=array("pr_vi");
        
        $this->orm->connect();
        $this->orm->read_data(array("prediseno","viabilidad"),$option);
        $prediseno = $this->orm->get_objects("prediseno",$components);
        $this->orm->close();
            
        $this->engine->assign('prediseno', $prediseno);
        $this->engine->assign('title', 'asignar viabilidad');
        
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('asignar_viabilidad.tpl');
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

$ob = new c_asignar_viabilidad();
$ob->run();
?>