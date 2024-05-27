<div class="container">
    <form id="formAddConsulta" method="post" action="<?php echo $this->Html->url(array('controller' => 'consultas', 'action' => 'add')); ?>">
    <div class="mb-3">
 
            <label for="paciente_id" class="form-label">Paciente</label>
            <select name="data[Consulta][paciente_id]" class="form-control" required>
                <?php foreach ($pacientes as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="data_consulta" class="form-label">Data</label>
            <input type="date" name="data[Consulta][data_consulta]" class="form-control" placeholder="Informe a data da consulta" required>
        </div>
        <div class="mb-3">
            <label for="hora_consulta" class="form-label">Horário</label>
            <input type="time" class="form-control" name="data[Consulta][hora_consulta]" placeholder="Informe o horario da consulta" required>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Tipo de Consulta</label>
            <select name="data[Tipo][nome]" class="form-control" required>
                <?php foreach ($tipos as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="especializacao" class="form-label">Especialização</label>
            <select name="data[Especializacoe][nome]" class="form-control" required>
                <?php foreach ($especializacoes as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="medico_id" class="form-label">Medico</label>
            <select name="data[Medico][nome]" class="form-control" required>
                <?php foreach ($medicos as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="consulta" class="form-label">Observações</label>
            <input type="text" class="form-control" name="data[Consulta][observacoes]" placeholder="Observações da consulta" required>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" onclick="salvarConsulta('', 'formAddConsulta', 'myModalConsultaAdd')">Salvar</button>
        </div>
    </form>
</div>
