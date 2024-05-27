<div class="container">
    <form id="formAddPaciente" method="post" action="<?php echo $this->Html->url(array('controller' => 'pacientes', 'action' => 'add')); ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="data[Paciente][nome]" placeholder="Informe o nome completo" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" name="data[Paciente][data_nascimento]" class="form-control" placeholder="Informe a data de nascimento" required>
        </div>
        <div class="mb-3">
            <label for="identificacao" class="form-label">Identificação</label>
            <input type="text" class="form-control" name="data[Paciente][identificacao]" placeholder="Informe o RG ou CPF" required>
        </div>
        <div class="mb-3">
            <label for="genero_id" class="form-label">Gênero</label>
            <select name="data[Paciente][genero_id]" class="form-control" required>
                <?php foreach ($generos as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <h1>Endereço</h1>
        <div class="mb-3">
            <label for="endereco" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="data[Endereco][cidade]" placeholder="Informe a cidade" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Estado</label>
            <input type="text" class="form-control" name="data[Endereco][estado]" placeholder="Informe o estado" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Logradouro</label>
            <input type="text" class="form-control" name="data[Endereco][logradouro]" placeholder="Informe o logradouro" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">CEP</label>
            <input type="text" class="form-control" name="data[Endereco][cep]" placeholder="Informe o cep" required>
        </div>
        <h1>Contato</h1>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="data[Contato][telefone]" placeholder="Informe o telefone">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control" name="data[Contato][celular]" placeholder="Informe o celular">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="data[Contato][email]" placeholder="Informe o email" required>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" onclick="salvarPaciente('', 'formAddPaciente', 'myModalPacienteAdd')">Salvar</button>
        </div>
    </form>
</div>
