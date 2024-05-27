<div class="container">
    <h1>Pacientes</h1>
    <?php if (!empty($pacientes)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Identificação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?php echo $paciente['Paciente']['nome']; ?></td>
                    <td><?php echo $paciente['Paciente']['identificacao']; ?></td>
                        <td>
                            <button class="btn btn-primary" onclick="editarPaciente(<?php echo $paciente['Paciente']['id']?>)">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="deletarPaciente(<?php echo $paciente['Paciente']['id']?>)">Deletar</button>
                        </td>
                      </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum paciente encontrado.</p>
    <?php endif; ?>
    <button class="btn btn-success" onclick="addPaciente()">Adicionar Paciente</button>
</div>
