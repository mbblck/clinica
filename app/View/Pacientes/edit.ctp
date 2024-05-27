// app/View/Elements/form_edit_paciente.ctp

?>
<div class="container">
    <h1>Editar Paciente</h1>
    <form id="formEditPaciente" method="post" action="<?php echo $this->Html->url(array('controller' => 'pacientes', 'action' => 'edit', $pacientes['Paciente']['id'])); ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="data[Paciente][nome]" value="<?php echo h($pacientes['Paciente']['nome']); ?>" placeholder="Informe o nome completo" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" name="data[Paciente][data_nascimento]" class="form-control" value="<?php echo h($pacientes['Paciente']['data_nascimento']); ?>" placeholder="Informe a data de nascimento" required>
        </div>
        <div class="mb-3">
            <label for="identificacao" class="form-label">Identificação</label>
            <input type="text" class="form-control" name="data[Paciente][identificacao]" value="<?php echo h($pacientes['Paciente']['identificacao']); ?>" placeholder="Informe o RG ou CPF" required>
        </div>
        <div class="mb-3">
            <label for="genero_id" class="form-label">Gênero</label>
            <select name="data[Paciente][genero_id]" class="form-control" required>
                <?php foreach ($generos as $id => $nome): ?>
                    <option value="<?php echo $id; ?>" <?php echo $pacientes['Paciente']['genero_id'] == $id ? 'selected' : ''; ?>><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <h1>Endereço</h1>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="data[Endereco][cidade]" value="<?php echo h($enderecosAssociados[0]['endereco']['cidade']); ?>" placeholder="Informe a cidade" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="data[Endereco][estado]" value="<?php echo h($enderecosAssociados[0]['endereco']['estado']); ?>" placeholder="Informe o estado" required>
        </div>
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" name="data[Endereco][logradouro]" value="<?php echo h($enderecosAssociados[0]['endereco']['logradouro']); ?>" placeholder="Informe o logradouro" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" name="data[Endereco][cep]" value="<?php echo h($enderecosAssociados[0]['endereco']['cep']); ?>" placeholder="Informe o cep" required>
        </div>
        <h1>Contato</h1>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="data[Contato][telefone]" value="<?php echo h($contatosAssociados[0]['contato']['telefone']); ?>" placeholder="Informe o telefone">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control" name="data[Contato][celular]" value="<?php echo h($contatosAssociados[0]['contato']['celular']); ?>" placeholder="Informe o celular">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="data[Contato][email]" value="<?php echo h($contatosAssociados[0]['contato']['email']); ?>" placeholder="Informe o email" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="salvarPaciente('', 'formEditPaciente', 'myModalPacienteEdit')">Salvar</button>
        </div>
    </form>
</div>

