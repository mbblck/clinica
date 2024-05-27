<div class="container">
    <form id="formAddMedico" method="post" action="<?php echo $this->Html->url(array('controller' => 'medicos', 'action' => 'add')); ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="data[Medico][nome]" placeholder="Informe o nome" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="data[Medico][cpf]" class="form-control" placeholder="Informe o CPF" required>
        </div>
        <div class="mb-3">
            <label for="crm" class="form-label">CRM</label>
            <input type="text" class="form-control" name="data[Medico][crm]" placeholder="Informe o CRM" required>
        </div>
        <div class="mb-3">
            <label for="genero_id" class="form-label">Gênero</label>
            <select name="data[Medico][genero_id]" class="form-control" required>
                <?php foreach ($generos as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="especializacao_id" class="form-label">Especialização</label>
            <select name="data[Medico][especializacao_id]" class="form-control" required>
                <?php foreach ($especializacoes as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" onclick="salvarMedico('', 'formAddMedico', 'myModalMedicoAdd')">Salvar</button>
        </div>
    </form>
</div>