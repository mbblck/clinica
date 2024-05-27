<div class="container">
    <h1>Editar Medico</h1>
    <form id="formEditConsulta">
        <div class="mb-3">
            <label for="data_consulta" class="form-label">Data</label>
            <input type="date" name="data[Consulta][data_consulta]" class="form-control" value="<?php echo h($consultas['Consulta']['data_consulta']); ?>" placeholder="Informe a data" required>
        </div>
        <div class="mb-3">
            <label for="horario_consulta" class="form-label">Horario</label>
            <input type="time" class="form-control" name="data[Consulta][horario_consulta]" value="<?php echo h($consultas['Consulta']['horario_consulta']); ?>" placeholder="Informe o horario" required>
        </div>
        
   
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="salvarConsulta('', 'formEditConsulta', 'myModalConsultaEdit')">Salvar</button>
        </div>
    </form>
</div>