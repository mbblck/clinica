<div class="container">
    <h1>Consultas</h1>
    <?php if (!empty($consultas)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Data</th>
                    <th>Horario</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($consultas as $consulta): ?>
                <tr>
                    <td><?php echo $consulta['Consulta']['nome_paciente'] ?></td>
                    <td><?php echo $consulta['Consulta']['data_consulta']; ?></td>
                    <td><?php echo $consulta['Consulta']['horario_consulta']; ?></td>
                    <td><?php echo $consulta['Consulta']['observacoes']; ?></td>
                    
                        <td>
                            <button class="btn btn-primary" onclick="editarConsulta(<?php echo $consulta['Consulta']['id']?>)">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="deletarConsulta(<?php echo $consulta['Consulta']['id']?>)">Deletar</button>
                        </td>
                        <td>
                            <button class="btn btn-warning" onclick="listarInfo(<?php echo $consulta['Consulta']['id']?>)">Detalhes</button>
                        </td>
                      </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhuma consulta agendada.</p>
    <?php endif; ?>
    <button class="btn btn-success" onclick="addConsulta()">Agendar nova consulta</button>
</div>
                                                        