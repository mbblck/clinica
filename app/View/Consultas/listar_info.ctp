<div class="container">
    <form id="formInfo">
    <div class="mb-3">
            <label for="paciente_id" class="form-label">Paciente</label>
            <input name="data[Consulta][paciente_id]" class="form-control" value="<?php echo $pacientes['Paciente']['nome']; ?>" disabled/>
        </div>
        <div class="mb-3">
            <label for="data_consulta" class="form-label">Data</label>
            <input type="date" name="data[Consulta][data_consulta]" class="form-control" value="<?php echo h($consultas['Consulta']['data_consulta']); ?>" placeholder="Informe a data" required>
        </div>
        <div class="mb-3">
            <label for="horario_consulta" class="form-label">Horario</label>
            <input type="time" class="form-control" name="data[Consulta][horario_consulta]" value="<?php echo h($consultas['Consulta']['horario_consulta']); ?>" placeholder="Informe o horario" required>
        </div>
        <div class="mb-3">
            <label for="tipo_id" class="form-label">Tipo</label>
            <input name="data[Consulta][tipo_id]" class="form-control" value="<?php echo $tipos['Tipo']['nome']; ?>" disabled/>   
        </div>
        <div class="mb-3">
            <label for="especializacao_id" class="form-label">Especialização</label>
            <input name="data[Especializacoe][nome]" class="form-control" required>
                <?php foreach ($especializacoes as $id => $nome): ?>
                    <option value="<?php echo $id; ?>" <?php echo $especializacoes['Especializacoe']['nome'] == $id ? 'selected' : ''; ?>><?php echo $nome; ?></option>
                <?php endforeach; ?>
            
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Medico</label>
            <select name="data[Medico][nome]" class="form-control" required>
                <?php foreach ($medicos as $id => $nome): ?>
                    <option value="<?php echo $id; ?>" <?php echo $medicos['Medicos']['nome'] == $id ? 'selected' : ''; ?>><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="observacoes" class="form-label">Observação</label>
            <input type="text" name="data[Consulta][observacoes]" class="form-control" value="<?php echo h($consultas['Consulta']['observacoes']); ?>" placeholder="" required>
        </div>
   
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>