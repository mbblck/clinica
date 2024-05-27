<?php
class ConsultasController extends AppController {

    public function index() {
        $this->layout = "ajax";
        $this->loadModel('Paciente');
        $this->loadModel('Medico');
        $this->loadModel('Especializacoe');
        $pacientes = $this->Paciente->find("list", array('fields' => array('Paciente.id','Paciente.nome')));
        $consultas = $this->Consulta->find("all");
        $medicos = $this->Medico->find("list", array('fields' => array('Medico.nome')));
        $especializacoes = $this->Especializacoe->find("list", array('fields' => array('Especializacoe.nome')));
        
      
        foreach($pacientes as $key => $paciente){
            foreach($consultas as $chave =>  $consulta){
                
                if($key == $consulta['Consulta']['paciente_id']){

                    $consultas[$chave]['Consulta']['nome_paciente'] = $paciente;
                    break;
                }
               
        
            }        
        }

        $this->set("consultas", $consultas);
        $this->set("medicos", $medicos);
        $this->set("pacientes", $pacientes);
        $this->set("especializacoes", $especializacoes);

        //  echo'<pre>'; print_r($pacientes); 
        //  echo'<pre>'; print_r($consultas); exit;
        
    }

    
    public function add() {
        $this->layout = "ajax";
        $this->loadModel('Paciente');
        $this->loadModel('Medico');
        $this->loadModel('Tipo');
        $this->loadModel('Especializacoe');
        $consultas = $this->Consulta->find("all");
        $pacientes = $this->Paciente->find("list", array('fields' => array('Paciente.nome')));
        $medicos = $this->Medico->find("list", array('fields' => array('Medico.nome')));
        $tipos = $this->Tipo->find("list", array('fields' => array('Tipo.nome')));
        $especializacoes = $this->Especializacoe->find("list", array('fields' => array('Especializacoe.nome')));
        
        $this->set("consultas", $consultas);
        $this->set("pacientes", $pacientes);
        $this->set("medicos", $medicos);
        $this->set("tipos", $tipos);
        $this->set("especializacoes", $especializacoes);

        // echo'<pre>'; print_r($consultas); exit;

    }

    public function save($id = null) {
        $this->layout = "ajax";

        if($id) {
            $this->Consulta->id = $id;
            $this->Consulta->save($this->request->data);

        } 

        //echo'<pre>';print_r($this->request->data['Paciente']); exit;
        
        $this->Consulta->save($this->request->data);

        exit;
    }

    public function edit($id = null) {
        $this->layout = "ajax";
        $this->loadModel('Paciente');
        $this->loadModel('Medico');
        $this->loadModel('Tipo');
        $this->loadModel('Especializacoe');
        $consultas = $this->Consulta->findById($id);
        $pacientes = $this->Paciente->find("all", array('fields' => array('Paciente.id','Paciente.nome')));
        $medicos = $this->Medico->find("list", array('fields' => array('Medico.nome')));
        $tipos = $this->Tipo->find("list", array('fields' => array('Tipo.nome')));
        $especializacoes = $this->Especializacoe->find("list", array('fields' => array('Especializacoe.nome')));
        
        // foreach ($pacientes as $paciente) { 
        //     foreach ($contatos as $contato) {
        //         if ($paciente['id'] == $contato['Contato']['paciente_id']) {
        //             $paciente['contato'] = $contato['Contato'];
        //             $contatosAssociados[] = $paciente; 
        //             break;
        //         }
        //     }
        // }
        
        $this->set("consultas", $consultas);
        $this->set("pacientes", $pacientes);
        $this->set("medicos", $medicos);
        $this->set("tipos", $tipos);
        $this->set("especializacoes", $especializacoes);

        // echo '<pre>'; print_r($consultas); exit;
}


public function delete($id = null) {
 
    $this->Consulta->delete($id); 

    echo 'Consulta excluída com sucesso';

    $this->autoRender = false; 
}

public function listarInfo($id = null) {
    $this->layout = "ajax";
    $this->loadModel('Paciente');
    $this->loadModel('Medico');
    $this->loadModel('Tipo');
    $this->loadModel('Especializacoe');
    $consultas = $this->Consulta->findById($id);
    $pacientes = $this->Paciente->find("first", array('conditions' =>array('Paciente.id' => $consultas['Consulta']['paciente_id'])));
    $medicos = $this->Medico->find("list", array('fields' => array('Medico.nome')));
    $tipos = $this->Tipo->find("first", array('conditions' =>array('Tipo.id' => $consultas['Consulta']['tipo_id'])));
    $especializacoes = $this->Especializacoe->find("list", array('fields' => array('Especializacoe.nome')));
    
    
    $this->set("consultas", $consultas);
    $this->set("pacientes", $pacientes);
    $this->set("medicos", $medicos);
    $this->set("tipos", $tipos);
    $this->set("especializacoes", $especializacoes);

    // echo '<pre>'; print_r($pacientes); exit;
}


}