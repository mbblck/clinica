<?php
class MedicosController extends AppController {

    public function index() {
        $this->layout = "ajax";
        $medicos = $this->Medico->find("all");
        
        $this->set("medicos", $medicos);
        
        
    }

    public function add() {
        $this->layout = "ajax";
        $this->loadModel('Genero');
        $this->loadModel('Especializacoe');
        $medicos = $this->Medico->find("all");
        $generos = $this->Genero->find("list", array('fields' => array('Genero.nome')));
        $especializacoes = $this->Especializacoe->find("list", array('fields' => array('Especializacoe.nome')));

        
        $this->set("medicos", $medicos);
        $this->set("generos", $generos);
        $this->set("especializacoes", $especializacoes);

        // echo'<pre>'; print_r($generos); exit;

    }

    public function save($id = null) {
        $this->layout = "ajax";

        if($id) {
            $this->Medico->id = $id;
            $this->Medico->save($this->request->data);

        } 

        //echo'<pre>';print_r($this->request->data['Paciente']); exit;
        
        $this->Medico->save($this->request->data);

        exit;
    }


    public function edit($id = null) {
        $this->layout = "ajax";
        $this->loadModel('Genero');
        $this->loadModel('Especializacoe');
        $medicos = $this->Medico->findById($id);
        $generos = $this->Genero->find("list", array('fields' => array('Genero.nome')));
        $especializacoes = $this->Especializacoe->find("list", array('fields' => array('Especializacoe.nome')));
        

        $this->set("medicos", $medicos);
        $this->set("generos", $generos);
        $this->set("especializacoes", $especializacoes);
    //  echo '<pre>'; print_r ($enderecosAssociados); exit;
    }

    public function delete($id = null) {
 
        $this->Medico->delete($id); 
    
        echo 'Medico excluído com sucesso';
    
        $this->autoRender = false; 
    }

    
}
