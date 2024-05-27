<div class="container">
    <h1>Medicos</h1>
    <?php if (!empty($medicos)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CRM</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($medicos as $medico): ?>
                <tr>
                    <td><?php echo $medico['Medico']['nome']; ?></td>
                    <td><?php echo $medico['Medico']['crm']; ?></td>
                        <td>
                            <button class="btn btn-primary" onclick="editarMedico(<?php echo $medico['Medico']['id']?>)">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="deletarMedico(<?php echo $medico['Medico']['id']?>)">Deletar</button>
                        </td>
                      </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum médico encontrado.</p>
    <?php endif; ?>
    <button class="btn btn-success" onclick="addMedico()">Adicionar Medico</button>
</div>