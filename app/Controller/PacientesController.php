<?php
class PacientesController extends AppController {

    public function index() {
        $this->layout = "ajax";
        $this->loadModel('Contato');
        $this->loadModel('Endereco');
        $this->loadModel('Genero');
        $pacientes = $this->Paciente->find("all");
        $contatos = $this->Contato->find("all", array('conditions' => array('Contato.Paciente_id' => 'Paciente.id')));
        $enderecos = $this->Endereco->find("all", array('conditions' => array('Endereco.Paciente_id' => 'Paciente.id')));
        $generos = $this->Genero->find("all");

        

        $this->set("pacientes", $pacientes);
        $this->set("contatos", $contatos);
        $this->set("enderecos", $enderecos);
        $this->set("generos", $generos);
        // echo'<pre>';print_r($generos);exit;
        
    }

    public function add() {
        $this->layout = "ajax";
        $this->loadModel('Contato');
        $this->loadModel('Endereco');
        $this->loadModel('Genero');
        $pacientes = $this->Paciente->find("all");
        $contatos = $this->Contato->find("all", array('conditions' => array('Contato.Paciente_id' => 'Paciente.id')));
        $enderecos = $this->Endereco->find("all", array('conditions' => array('Endereco.Paciente_id' => 'Paciente.id')));
        $generos = $this->Genero->find("list", array('fields' => array('Genero.nome')));

        

        $this->set("pacientes", $pacientes);
        $this->set("contatos", $contatos);
        $this->set("enderecos", $enderecos);
        $this->set("generos", $generos);

        // echo'<pre>'; print_r($generos); exit;

    }

    public function save($id = null) {
        $this->layout = "ajax";

        if($id) {
            $this->Paciente->id = $id;
            $this->Paciente->save($this->request->data);

        } 

        //echo'<pre>';print_r($this->request->data['Paciente']); exit;
        
        $this->Paciente->save($this->request->data);

        exit;
    }


    
    public function edit($id = null) {
        $this->layout = "ajax";
        $this->loadModel('Contato');
        $this->loadModel('Endereco');
        $this->loadModel('Genero');
        $pacientes = $this->Paciente->findById($id);
        $contatos = $this->Contato->find("all");
        $enderecos = $this->Endereco->find("all");
        $generos = $this->Genero->find("list", array('fields' => array('Genero.nome')));
        
        foreach ($pacientes as $paciente) { 
            foreach ($contatos as $contato) {
                if ($paciente['id'] == $contato['Contato']['paciente_id']) {
                    $paciente['contato'] = $contato['Contato'];
                    $contatosAssociados[] = $paciente; 
                    break;
                }
            }
        }

        foreach ($pacientes as $paciente) { 
            foreach ($enderecos as $endereco) {
                if ($paciente['id'] == $endereco['Endereco']['paciente_id']) {
                    $paciente['endereco'] = $endereco['Endereco'];
                    $enderecosAssociados[] = $paciente; 
                    break;
                }
            }
        }

        $this->set("pacientes", $pacientes);
        $this->set("enderecos", $enderecos);
        $this->set("generos", $generos);
        $this->set("contatosAssociados", $contatosAssociados);
        $this->set("enderecosAssociados", $enderecosAssociados);
    
    //  echo '<pre>'; print_r ($enderecosAssociados); exit;
    }

    public function delete($id = null) {
 
        $this->Paciente->delete($id); 
    
        echo 'Paciente excluído com sucesso';
    
        $this->autoRender = false; 
    }

    
}


