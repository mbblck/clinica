<div class="mb-3">
            <label for="paciente_id" class="form-label">Paciente</label>
            <select name="data[Consulta][paciente_id]" class="form-control" required>
                <?php foreach ($pacientes as $paciente): ?>
                    <option value="<?= $paciente['Paciente']['id']; ?>" <?php echo $consultas['Consulta']['paciente_id'] == $paciente['Paciente']['id'] ? 'selected' : ''; ?>><?php echo  $paciente['Paciente']['nome']; ?></option>
                <?php endforeach; ?>
                </select>
        </div>